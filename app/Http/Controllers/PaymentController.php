<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PaymentRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $payments = Payment::paginate();

        return view('payments.index', compact('payments'))
            ->with('i', ($request->input('page', 1) - 1) * $payments->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $payment = new Payment();

        return view('payments.create', compact('payment'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PaymentRequest $request): RedirectResponse
    {
        Payment::create($request->validated());

        return Redirect::route('payments.index')
            ->with('success', 'Payment created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $payment = Payment::find($id);

        return view('payments.show', compact('payment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $payment = Payment::find($id);

        return view('payments.edit', compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PaymentRequest $request, Payment $payment): RedirectResponse
    {
        $payment->update($request->validated());

        return Redirect::route('payments.index')
            ->with('success', 'Payment updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Payment::find($id)->delete();

        return Redirect::route('payments.index')
            ->with('success', 'Payment deleted successfully');
    }
}
