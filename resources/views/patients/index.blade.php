@extends('layouts.panel')

@section('title', 'Paciente /Crear')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Patients') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('patients.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Nose</th>
                                        
									<th >Nombre</th>
									<th >Identification</th>
									<th >P Birth</th>
									<th >Age</th>
									<th >Addres</th>
									<th >Sex</th>
									<th >Nationality</th>
									<th >Ethnicity</th>
									<th >Telephone</th>
									<th >Departament</th>
									<th >Responsible</th>
									<th >Country</th>
									<th >Mail</th>
									<th >Municipality</th>
									<th >Marital Status</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($patients as $patient)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $patient->name }}</td>
										<td >{{ $patient->identification }}</td>
										<td >{{ $patient->p_Birth }}</td>
										<td >{{ $patient->age }}</td>
										<td >{{ $patient->addres }}</td>
										<td >{{ $patient->sex }}</td>
										<td >{{ $patient->nationality }}</td>
										<td >{{ $patient->ethnicity }}</td>
										<td >{{ $patient->telephone }}</td>
										<td >{{ $patient->departament }}</td>
										<td >{{ $patient->responsible }}</td>
										<td >{{ $patient->country }}</td>
										<td >{{ $patient->mail }}</td>
										<td >{{ $patient->municipality }}</td>
										<td >{{ $patient->marital_status }}</td>

                                            <td>
                                                <form action="{{ route('patients.destroy', $patient->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('patients.show', $patient->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('patients.edit', $patient->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $patients->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
