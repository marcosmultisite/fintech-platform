<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function process(Request $request)
    {
        $payment = Payment::create([
            'loan_id' => $request->loan_id,
            'amount' => $request->amount,
            'status' => 'processed'
        ]);

        return response()->json($payment, 201);
    }
}
