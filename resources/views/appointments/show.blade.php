@extends('layouts.panel')

@section('title', 'appointment /Crear')

@section('content')
<div class="col-xl-12 order-xl-1">
    <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">
                        <i class="fas fa-newspaper"></i> Ver cita
                    </h3>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('appointments.index') }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-arrow-left"></i> Volver
                    </a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <h6 class="heading-small text-muted mb-4">Información de la cita</h6>
            <div class="pl-lg-4">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-user"></i> Duración
                            </label>
                            <p>{{ $appointments->duration }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-id-badge"></i> Fecha
                            </label>
                            <p>{{ $appointments->date }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-id-card"></i> Tratamiento
                            </label>
                            <p>{{ $appointments->treatment }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-reason-cake"></i> Motivo
                            </label>
                            <p>{{ $appointments->reason }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-name_client-alt"></i> Nombre del cliente
                            </label>
                            <p>{{ $appointments->name_client }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-map-marker-alt"></i> Numero del cliente
                            </label>
                            <p>{{ $appointments->number_client }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
