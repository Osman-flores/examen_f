<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TreatmentRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $treatments = Treatment::paginate();

        return view('treatment.index', compact('treatments'))
            ->with('i', ($request->input('page', 1) - 1) * $treatments->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $treatment = new Treatment();

        return view('treatments.create', compact('treatment'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TreatmentRequest $request): RedirectResponse
    {
        Treatment::create($request->validated());

        return Redirect::route('treatments.index')
            ->with('success', 'Treatment created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $treatment = Treatment::find($id);

        return view('treatments.show', compact('treatment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $treatment = Treatment::find($id);

        return view('treatments.edit', compact('treatment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TreatmentRequest $request, Treatment $treatment): RedirectResponse
    {
        $treatment->update($request->validated());

        return Redirect::route('treatments.index')
            ->with('success', 'Treatment updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Treatment::find($id)->delete();

        return Redirect::route('treatments.index')
            ->with('success', 'Treatment deleted successfully');
    }
}
