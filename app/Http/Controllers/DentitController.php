<?php

namespace App\Http\Controllers;

use App\Models\Dentit;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DentitRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DentitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $dentits = Dentit::paginate();

        return view('dentits.index', compact('dentits'))
            ->with('i', ($request->input('page', 1) - 1) * $dentits->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $dentit = new Dentit();

        return view('dentits.create', compact('dentit'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DentitRequest $request): RedirectResponse
    {
        Dentit::create($request->validated());

        return Redirect::route('dentits.index')
            ->with('success', 'Dentit created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $dentit = Dentit::find($id);

        return view('dentits.show', compact('dentit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $dentit = Dentit::find($id);

        return view('dentits.edit', compact('dentit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DentitRequest $request, Dentit $dentit): RedirectResponse
    {
        $dentit->update($request->validated());

        return Redirect::route('dentits.index')
            ->with('success', 'Dentit updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Dentit::find($id)->delete();

        return Redirect::route('dentits.index')
            ->with('success', 'Dentit deleted successfully');
    }
}
