<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment()
    {
        return view('payment');
    }

    public function thankyou()
    {
        return view('thankyou');
    }
}
