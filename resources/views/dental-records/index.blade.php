@extends('layouts.panel')

@section('title', 'dentist_record /Crear')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Dental Records') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('dental-records.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Date</th>
									<th >Treatment</th>
									<th >Progress</th>
									<th >Allergiances</th>
									<th >Patient Id</th>
									<th >Treatment Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dentalRecords as $dentalRecord)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $dentalRecord->date }}</td>
										<td >{{ $dentalRecord->treatment }}</td>
										<td >{{ $dentalRecord->progress }}</td>
										<td >{{ $dentalRecord->allergiances }}</td>
										<td >{{ $dentalRecord->patient_id }}</td>
										<td >{{ $dentalRecord->treatment_id }}</td>

                                            <td>
                                                <form action="{{ route('dental-records.destroy', $dentalRecord->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('dental-records.show', $dentalRecord->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('dental-records.edit', $dentalRecord->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $dentalRecords->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
