<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;

class PaymentController extends Controller
{
    public function showPaymentForm()
    {
        return view('payment.form');
    }

    public function processPayment(Request $request)
    {
        $status = rand(0, 1) ? 'success' : 'failure';

        $transaction = new Transaction([
            'transaction_id' => uniqid('TXN_'),
            'user_id' => $request->user_id,
            'amount' => $request->amount,
            'status' => $status,
        ]);

        $transaction->save();

        return redirect()->back()->with('message', 'Payment processed: ' . $status);
    }
}
