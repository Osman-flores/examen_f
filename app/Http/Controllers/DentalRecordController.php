<?php

namespace App\Http\Controllers;

use App\Models\DentalRecord;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DentalRecordRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DentalRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $dentalRecords = DentalRecord::paginate();

        return view('dental-records.index', compact('dentalRecords'))
            ->with('i', ($request->input('page', 1) - 1) * $dentalRecords->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $dentalRecord = new DentalRecord();

        return view('dental-records.create', compact('dentalRecord'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DentalRecordRequest $request): RedirectResponse
    {
        DentalRecord::create($request->validated());

        return Redirect::route('dental-records.index')
            ->with('success', 'DentalRecord created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $dentalRecord = DentalRecord::find($id);

        return view('dental-records.show', compact('dentalRecord'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $dentalRecord = DentalRecord::find($id);

        return view('dental-records.edit', compact('dentalRecord'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DentalRecordRequest $request, DentalRecord $dentalRecord): RedirectResponse
    {
        $dentalRecord->update($request->validated());

        return Redirect::route('dental-records.index')
            ->with('success', 'DentalRecord updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        DentalRecord::find($id)->delete();

        return Redirect::route('dental-records.index')
            ->with('success', 'DentalRecord deleted successfully');
    }
}
