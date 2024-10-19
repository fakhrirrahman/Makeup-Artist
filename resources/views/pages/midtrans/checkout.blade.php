<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Menggunakan URL Snap sesuai environment (Sandbox/Production) -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
    <title>Toko Durian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="my-3">Toko Durian</h1>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('assets/img/durian.jpg') }}" class="card-img-top" alt="Durian">
            <div class="card-body">
                <h5 class="card-title">Detail Pesanan</h5>
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>: {{$order->name}}</td>
                    </tr>
                    <tr>
                        <td>No Hp</td>
                        <td>: {{$order->phone}}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: {{$order->address}}</td>
                    </tr>
                    <tr>
                        <td>Qty</td>
                        <td>: {{$order->qty}}</td>
                    </tr>
                    <tr>
                        <td>Total Harga</td>
                        <td>: Rp{{ number_format($order->total_price, 0, ',', '.') }}</td>
                    </tr>
                </table>
                <button class="btn btn-primary mt-3" id="pay-button">Bayar Sekarang</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
            // Trigger Snap popup dengan token transaksi
            window.snap.pay('{{$snapToken}}', {
                onSuccess: function (result) {
                    window.location.href = '/invoice/{{$order->id}}'; // Redirect ke halaman invoice
                    console.log(result);
                },
                onPending: function (result) {
                    alert("Menunggu pembayaran!");
                    console.log(result);
                },
                onError: function (result) {
                    alert("Pembayaran gagal!");
                    console.log(result);
                },
                onClose: function () {
                    alert('Anda menutup popup tanpa menyelesaikan pembayaran');
                }
            });
        });
    </script>
</body>

</html>