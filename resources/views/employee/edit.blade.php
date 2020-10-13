@extends ('layouts.app')

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __('EDIT EMPLOYEE') }}</div>

                  <div class="card-body">


                      {!! Form::open(['action' => ['App\Http\Controllers\EmployeeController@update',$employee->emp_id], 'method' => 'POST']) !!}

                      <div class="form-group">
                        {{Form::label('emp_fname','First Name')}}
                        {{Form::text('emp_fname',$employee->emp_fname,['classes'=>'form-control', 'placeholder'=>'First Name' ])}}
                      </div>
                      <div class="form-group">
                        {{Form::label('emp_lname','Last Name')}}
                        {{Form::text('emp_lname',$employee->emp_lname,['classes'=>'form-control', 'placeholder'=>'Last Name' ])}}
                      </div>
                      <div class="form-group">
                        {{Form::label('emp_contact','Contact')}}
                        {{Form::text('emp_contact',$employee->emp_contact,['classes'=>'form-control', 'placeholder'=>'Contact' ])}}
                      </div>
                      <div class="form-group">
                        {{Form::label('emp_address','Address')}}
                        {{Form::text('emp_address',$employee->emp_address,['classes'=>'form-control', 'placeholder'=>'Address' ])}}
                      </div>
                      {{Form::hidden('_method', 'PUT')}}


                      {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
                      {!! Form::close()!!}
                  </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endsection
