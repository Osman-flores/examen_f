@extends('layouts.panel')

@section('title', 'Carrera/Actualizar')

@section('content')

    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Dentista</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('dentits.update', $dentit->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('dentits.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
