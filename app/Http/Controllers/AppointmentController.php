<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Dentit;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\AppointmentRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;



class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $appointments = Appointment::with('patients', 'dentits')->paginate();

        return view('appointments.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $appointments = new Appointment();
        $patients = Patient::all();
        $dentits = Dentit::all();

        return view('appointments.create', compact('appointments', 'patients', 'dentits'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AppointmentRequest $request): RedirectResponse
    {
        Appointment::create($request->validated());

        return Redirect::route('appointments.index')
            ->with('success', 'Appointment created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $appointment = Appointment::find($id);
        $patients = Patient::all();
        $dentits = Dentit::all();

        return view('appointments.show', compact('appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $appointment = Appointment::find($id);
        $patients = Patient::all();
        $dentits = Dentit::all();

        return view('appointments.edit', compact('appointment', 'patients', 'dentits'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AppointmentRequest $request, int $id )
    {
        $appointment = Appointment::find($id);
        $appointment->update($request->validated());    

        return Redirect()->route('appointments.index')
            ->with('update', 'Cita actualizada exitosamente');
    }

    public function destroy($id)
    {
        Appointment::find($id)->delete();

        return Redirect()->route('appointments.index')
            ->with('delete', 'Cita eliminada exitosamente');
    }
}
