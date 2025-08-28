@extends('layouts.panel')

@section('title', 'Student/Show')

@section('content')
<div class="col-xl-12 order-xl-1">
    <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">
                        <i class="fas fa-newspaper"></i> Ver dentista
                    </h3>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('dentists.index') }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-arrow-left"></i> Volver
                    </a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <h6 class="heading-small text-muted mb-4">Información del dentista</h6>
            <div class="pl-lg-4">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-user"></i> Nombre Completo
                            </label>
                            <p>{{ $dentists->name }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-id-badge"></i> Registro
                            </label>
                            <p>{{ $dentists->record }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-id-card"></i> Dirección
                            </label>
                            <p>{{ $dentists->address }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-venus-mars"></i> Género
                            </label>
                            <p>{{ $dentists->sex }}</p>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-birthday-cake"></i> Edad
                            </label>
                            <p>{{ $dentists->age }}</p>
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-map-marker-alt"></i> Lugar de Nacimiento
                            </label>
                            <p>{{ $dentists->p_birth }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-flag"></i> Nacionalidad
                            </label>
                            <p>{{ $dentists->nationality }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-envelope"></i> Correo Electrónico
                            </label>
                            <p>{{ $dentists->mail }}</p>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-calendar-alt"></i> Alergias
                            </label>
                            <p>{{ $dentists->allergies }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-phone"></i> Teléfono
                            </label>
                            <p>{{ $dentists->telephone }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-envelope"></i> Especialidades
                            </label>
                            <p>{{ $dentists->speciality }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-globe"></i> Etnia
                            </label>
                            <p>{{ $dentists->ethnicity }}</p>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-globe-americas"></i> País
                            </label>
                            <p>{{ $dentists->country }}</p>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-city"></i> Municipio
                            </label>
                            <p>{{ $dentists->municipality }}</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection

