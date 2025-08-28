@extends('layouts.panel')
@section('title', 'Estudiantes')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Dentits') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('dentits.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>No</th>
                                        
									<th >Name</th>
									<th >Record</th>
									<th >Address</th>
									<th >Gender</th>
									<th >Age</th>
									<th >P Birth</th>
									<th >Nationality</th>
									<th >Email</th>
									<th >Allergies</th>
									<th >Telephone</th>
									<th >Speciality</th>
									<th >Ethnicity</th>
									<th >Country</th>
									<th >Municipality</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dentits as $dentit)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $dentit->name }}</td>
										<td >{{ $dentit->record }}</td>
										<td >{{ $dentit->address }}</td>
										<td >{{ $dentit->gender }}</td>
										<td >{{ $dentit->age }}</td>
										<td >{{ $dentit->p_Birth }}</td>
										<td >{{ $dentit->nationality }}</td>
										<td >{{ $dentit->email }}</td>
										<td >{{ $dentit->allergies }}</td>
										<td >{{ $dentit->telephone }}</td>
										<td >{{ $dentit->speciality }}</td>
										<td >{{ $dentit->ethnicity }}</td>
										<td >{{ $dentit->country }}</td>
										<td >{{ $dentit->municipality }}</td>

                                            <td>
                                                <form action="{{ route('dentits.destroy', $dentit->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('dentits.show', $dentit->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('dentits.edit', $dentit->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $dentits->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
