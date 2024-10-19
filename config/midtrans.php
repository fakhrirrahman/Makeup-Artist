<?php

    return [
        'merchant_id' => env('MIDTRANS_MERCHENT_ID'),
        'client_key' => env('MIDTRANS_CLIENT_ID'), // Ubah dari client_id menjadi client_key
        'server_key' => env('MIDTRANS_SERVER_ID'), // Ubah dari server_id menjadi server_key
        'is_production' => env('MIDTRANS_IS_PRODUCTION', false),
    ];