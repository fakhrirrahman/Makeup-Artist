<?php

namespace App\Http\Controllers;

use App\Models\PasswordResetToken;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPasswordMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;



class LoginController extends Controller
{
    //

    public function login()
    {
        return view('pages.auth.login');
    }

    public function forgot_password()
    {
        return view('pages.auth.forgot-password');
    }

    public function forgot_password_act(Request $request)
    {
        $customMessage = [
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'email.exists' => 'Email tidak terdaftar di database',
        ];

        $request->validate([
            'email' => 'required|email|exists:users,email'
        ], $customMessage);

        $token = \Str::random(60);

        PasswordResetToken::updateOrCreate(
            [
                'email' => $request->email
            ],
            [
                'token' => $token,
                'created_at' => now(),
            ]
        );

        Log::info("Email yang disimpan: {$request->email}");
        Log::info("Token yang disimpan: {$token}");
        Log::info('Token yang disimpan: ' . $token);

        Mail::to($request->email)->send(new ResetPasswordMail($token));

        return redirect()->route('forgot-password')->with('success', 'Kami telah mengirimkan link reset password ke email anda');
    }



    public function validasi_forgot_password_act(Request $request)
    {
        $customMessage = [
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 6 karakter',
        ];

        $request->validate([
            'password' => 'required|min:6'
        ], $customMessage);

        Log::info("Token yang diterima: {$request->token}");
        Log::info('Token yang diterima: ' . $request->token);

        $token = PasswordResetToken::where('token', $request->token)->first();

        if (!$token) {
            Log::error('Token tidak ditemukan atau tidak valid');
            return redirect()->route('login')->with('failed', 'Token tidak valid');
        }

        // Logging data token yang ditemukan
        Log::info('Token ditemukan: ' . json_encode($token));

        if (!isset($token->email)) {
            Log::error('Token tidak memiliki email yang valid: ' . json_encode($token));
            return redirect()->route('login')->with('failed', 'Token tidak valid');
        }

        $user = User::where('email', $token->email)->first();

        if (!$user) {
            Log::error('Email tidak ditemukan di database: ' . $token->email);
            return redirect()->route('login')->with('failed', 'Email tidak terdaftar di database');
        }

        // Logging sebelum memperbarui password
        Log::info('Reset password untuk email: ' . $token->email);
        Log::info('Password baru (sebelum hash): ' . $request->password);

        $user->update([
            'password' => Hash::make($request->password)
        ]);

        // Logging setelah memperbarui password
        Log::info('Password baru (setelah hash): ' . $user->password);

        // Hapus token setelah digunakan
        $token->delete();

        return redirect()->route('login')->with('success', 'Password berhasil direset');
    }


    public function validasi_forgot_password(Request $request, $token)
    {
        $getToken = PasswordResetToken::where('token', $token)->first();

        if (!$getToken) {
            return redirect()->route('login')->with('failed', 'Token tidak valid');
        }

        return view('pages.auth.validasi-token', compact('token'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Kamu berhasil logout');
    }

    public function register()
    {
        return view('pages.auth.register');
    }

    public function register_proses(Request $request)
    {
        $request->validate([
            'nama'  => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        $data['name']       = $request->nama;
        $data['email']      = $request->email;
        $data['password']   = Hash::make($request->password);

        User::create($data);

        $login = [
            'email'     => $request->email,
            'password'  => $request->password
        ];

        if (Auth::attempt($login)) {
            return redirect()->route('login');
        } else {
            return redirect()->route('login')->with('failed', 'Email atau Password Salah');
        }
    }


    public function auth(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect()->route('admin')->with('success', 'Selamat datang di halaman Admin!');
            } else {
                return redirect()->route('user.index')->with('success', 'Login berhasil!');
            }
        }

        return redirect()->back()->withErrors(['error' => 'Login gagal, periksa email dan password Anda.']);
    }
}
