@extends('layouts.app')

@section ('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __('DEPLOY EQUIPMENT') }}</div>

                  <div class="card-body">

    {!! Form::open(['action' => 'App\Http\Controllers\DeployController@store',  'method' => 'POST']) !!}

    <div class="form-group">
      <select class="form-control" name="d_employee">
                @foreach($employees as $employees)
                <option value="{{ $employees->emp_fname }}">{{ $employees->emp_fname }}</option>
                  @endforeach
              </select>
    </div>
    <div class="form-group">
      <select class="form-control" name="d_equipment" >
        @foreach($equipment as $equipment)

                <option value="{{ $equipment->e_name }} ">{{ $equipment->e_name }}</option>

@endforeach



              </select>
</div>


<div class="form-group">
  {{Form::label('d_quantity','Quantity:')}}
  {{Form::text('d_quantity','',['classes'=>'form-control', 'placeholder'=>'Quantity' ])}}
</div>
    <div class="form-group">
      {{Form::label('d_school','School:')}}
      {{Form::text('d_school','',['classes'=>'form-control', 'placeholder'=>'School' ])}}
    </div>






    {{Form::submit('Deploy', ['class' => 'btn btn-primary'])}}


    {!! Form::close()!!}












  </div>

  </div>

  </div>
  </div>

  </div>
  </div>

  @endsection
