@extends('layouts.panel')

@section('title', 'Pago /Crear')

@section('content')
<div class="col-xl-12 order-xl-1">
    <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">
                        <i class="fas fa-newspaper"></i> Ver Pagos
                    </h3>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('payments.index') }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-arrow-left"></i> Volver
                    </a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <h6 class="heading-small text-muted mb-4">Información del Pago</h6>
            <div class="pl-lg-4">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-user"></i> Cantidad de pago
                            </label>
                            <p>{{ $payment->amount }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-id-badge"></i> Fecha de pago
                            </label>
                            <p>{{ $payment->payment_date }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">
                                <i class="fas fa-id-card"></i> Tipo de pago
                            </label>
                            <p>{{ $payment->payment_type }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
