<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\payment;

use App\Models\worker;

class paymentController extends Controller
{
    public function index()
    {
        $payments = payment::latest()->paginate(5);
        $workers = worker::latest()->paginate(5);
        

        return view('payments.index', compact('payments','workers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

   
    public function create()
    {
        return view('payments.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'destination' => 'required',
            'price' => 'required',
            'reason' => 'required',
            
        ]);

        payment::create($request->all());

        return redirect()->route('payments.index');
    }

   
   

   
    public function edit(payment $payment)
    {
        return view('payments.edit', compact('payment'));
    }
   
    public function update(Request $request, payment $payment)
    {
        $request->validate([
            'destination' => 'required',
            'price' => 'required',
            'reason' => 'required',
        ]);
        $payment->update($request->all());

        return redirect()->route('payments.index');
    }
   
    public function destroy(payment $payment)
    {
        $payment->delete();

        return redirect()->route('payments.index');
    }
}
