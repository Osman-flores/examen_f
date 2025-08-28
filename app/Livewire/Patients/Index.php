<?php

namespace App\Livewire\Patients;

use App\Models\Patient;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Layout('layouts.app')]
    public function render(): View
    {
        $patients = Patient::paginate();

        return view('livewire.patient.index', compact('patients'))
            ->with('i', $this->getPage() * $patients->perPage());
    }

    public function delete(Patient $patient)
    {
        $patient->delete();

        return $this->redirectRoute('patients.index', navigate: true);
    }
}
