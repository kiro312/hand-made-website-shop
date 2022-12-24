<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all();
        return view('Admin.payments.index', compact('payments'));
    }

    public function create()
    {
        return view('Admin.payments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'payment_method' => 'required',
            'payment_method_description' => 'required'
        ]);

        Payment::create($request->all());

        return view('Admin.payments.create');
    }

    public function show($id)
    {
        $payment = Payment::find($id);
        return view('Admin.payments.show', compact('payment'));
    }

    public function edit(Payment $payment)
    {
        return view('Admin.payments.edit', compact('payment'));
    }

    public function update(Request $request, Payment $payment)
    {
        $request->validate([
            'payment_method' => 'required',
            'payment_method_description' => 'required'
        ]);

        $payment->update($request->all());
        return redirect()->route('payments.index');
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()->route('payments.index');
    }
}
