<?php

namespace App\Livewire\Patients;

use App\Livewire\Forms\PatientForm;
use App\Models\Patient;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public PatientForm $form;

    public function mount(Patient $patient)
    {
        $this->form->setPatientModel($patient);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.patient.show', ['patient' => $this->form->patientModel]);
    }
}
