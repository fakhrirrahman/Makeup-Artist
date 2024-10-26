<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function showCheckoutPage()
    {
        $contactData = session('contact_data', []);
        return view('checkout', compact('contactData'));
    }
}
