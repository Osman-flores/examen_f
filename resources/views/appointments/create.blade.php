@extends('layouts.panel')

@section('title', 'appointment /Crear')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} citas</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('appointments.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('appointments.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
