<?php

namespace App\Livewire\Forms;

use App\Models\Patient;
use Livewire\Form;

class PatientForm extends Form
{
    public ?Patient $patientModel;
    
    public $name = '';
    public $identification = '';
    public $p_Birth = '';
    public $age = '';
    public $addres = '';
    public $sex = '';
    public $nationality = '';
    public $ethnicity = '';
    public $telephone = '';
    public $departament = '';
    public $responsible = '';
    public $country = '';
    public $mail = '';
    public $municipality = '';
    public $marital_status = '';

    public function rules(): array
    {
        return [
			'name' => 'required|string',
			'identification' => 'required|string',
			'p_Birth' => 'required|string',
			'age' => 'required',
			'addres' => 'required|string',
			'sex' => 'required|string',
			'nationality' => 'required|string',
			'ethnicity' => 'required|string',
			'telephone' => 'required|string',
			'departament' => 'required|string',
			'responsible' => 'required|string',
			'country' => 'required|string',
			'mail' => 'required|string',
			'municipality' => 'required|string',
			'marital_status' => 'required|string',
        ];
    }

    public function setPatientModel(Patient $patientModel): void
    {
        $this->patientModel = $patientModel;
        
        $this->name = $this->patientModel->name;
        $this->identification = $this->patientModel->identification;
        $this->p_Birth = $this->patientModel->p_Birth;
        $this->age = $this->patientModel->age;
        $this->addres = $this->patientModel->addres;
        $this->sex = $this->patientModel->sex;
        $this->nationality = $this->patientModel->nationality;
        $this->ethnicity = $this->patientModel->ethnicity;
        $this->telephone = $this->patientModel->telephone;
        $this->departament = $this->patientModel->departament;
        $this->responsible = $this->patientModel->responsible;
        $this->country = $this->patientModel->country;
        $this->mail = $this->patientModel->mail;
        $this->municipality = $this->patientModel->municipality;
        $this->marital_status = $this->patientModel->marital_status;
    }

    public function store(): void
    {
        $this->patientModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->patientModel->update($this->validate());

        $this->reset();
    }
}
