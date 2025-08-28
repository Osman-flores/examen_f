<?php

namespace App\Livewire\Patients;

use App\Livewire\Forms\PatientForm;
use App\Models\Patient;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public PatientForm $form;

    public function mount(Patient $patient)
    {
        $this->form->setPatientModel($patient);
    }

    public function save()
    {
        $this->form->store();

        return $this->redirectRoute('patients.index', navigate: true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.patient.create');
    }
}
