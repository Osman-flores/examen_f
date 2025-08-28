<?php

namespace App\Exports;

use App\Http\Controllers\PatientController;
use App\Http\Controllers\DentitController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DentalRecordController;
use App\Http\Controllers\PaymentController;
use App\Livewire\Products\ProductList;
use Illuminate\Support\Facades\Route;

use App\Exports\PatientsExport;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/patients/export/excel', function () {
    return Excel::download(new PatientsExport, 'patients.xlsx');
})->name('patients.export.excel');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::prefix('/profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/update', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');

        
    });

    //rutas de posts de tipo resource
    
     Route::resource('/patients', PatientController::class);
     Route::resource('/dentits', DentitController::class);
     Route::resource('/treatments', TreatmentController::class);
     Route::resource('/appointments', AppointmentController::class);
     Route::resource('/dental-records', DentalRecordController::class);
     Route::resource('/payments', PaymentController::class);

    // Route::resource('/categories', CategoryController::class);
    // Route::resource('/animals', AnimalController::class);
});

require __DIR__ . '/auth.php';
