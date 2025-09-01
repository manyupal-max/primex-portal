<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all();
        return view('payments', compact('payments'));
    }

    public function createQr(Request $request)
    {
        $upi = $request->upi_id;
        $amount = $request->amount;
        $name = "PrimeX";
        $url = "upi://pay?pa=$upi&pn=$name&am=$amount&cu=INR";
        return redirect($url);
    }
}
