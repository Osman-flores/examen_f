@extends('layouts.panel')

@section('title', 'Paciente/Show')

@section('content')
<div class="col-xl-12 order-xl-1">
    <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">
                        <i class="fas fa-newspaper"></i> Ver Paciente
                    </h3>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('patients.index') }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-arrow-left"></i> Volver
                    </a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <h6 class="heading-small text-muted mb-4">Información del Paciente</h6>
            <div class="pl-lg-4">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-user"></i> Nombre Completo
                            </label>
                            <p>{{ $patients->name }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-id-card"></i> Cédula de Identificación
                            </label>
                            <p>{{ $patients->identification }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-map-marker-alt"></i> Lugar de Nacimiento
                            </label>
                            <p>{{ $patients->p_birth }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-birthday-cake"></i> Edad
                            </label>
                            <p>{{ $patients->age }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-home"></i> Dirección
                            </label>
                            <p>{{ $patients->address }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-venus-mars"></i> Género
                            </label>
                            <p>{{ $patients->sex }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-flag"></i> Nacionalidad
                            </label>
                            <p>{{ $patients->nationality }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-globe"></i> Etnia
                            </label>
                            <p>{{ $patients->ethnicity }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-phone"></i> Teléfono
                            </label>
                            <p>{{ $patients->telephone }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-map"></i> Departamento
                            </label>
                            <p>{{ $patients->departament }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-globe-americas"></i> País
                            </label>
                            <p>{{ $patients->country }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-envelope"></i> Correo Electrónico
                            </label>
                            <p>{{ $patients->mail }}</p>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-city"></i> Municipio
                            </label>
                            <p>{{ $patients->municipality }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-heart"></i> Estado Civil
                            </label>
                            <p>{{ $patients->marital_status }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
