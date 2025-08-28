@extends('layouts.panel')

@section('title', 'Treatment /Crear')

@section('content')
<div class="col-xl-12 order-xl-1">
    <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">
                        <i class="fas fa-newspaper"></i> Ver Tratamiento
                    </h3>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('treatment.index') }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-arrow-left"></i> Volver
                    </a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <h6 class="heading-small text-muted mb-4">Información del tratamiento</h6>
            <div class="pl-lg-4">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-user"></i> Estado
                            </label>
                            <p>{{ $treatment->state }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-id-badge"></i> Costo
                            </label>
                            <p>{{ $treatment->cost }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-id-card"></i> Estado de pago
                            </label>
                            <p>{{ $treatment->payment_status }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-map-marker-alt"></i> nombre del dentista
                            </label>
                            <p>{{ $treatment->dentist_name }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-home"></i> Área
                            </label>
                            <p>{{ $treatment->area }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection


