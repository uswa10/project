@extends ('layouts.app')

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __('EDIT EQUIPMENT') }}</div>

                  <div class="card-body">


                      {!! Form::open(['action' => ['App\Http\Controllers\EquipmentController@update',$equipment->e_id], 'method' => 'POST']) !!}

                      <div class="form-group">
                        {{Form::label('e_name','Equipment Name')}}
                        {{Form::text('e_name',$equipment->e_name,['classes'=>'form-control', 'placeholder'=>'Equipment Name' ])}}
                      </div>
                      <div class="form-group">
                        {{Form::label('e_price','Price')}}
                        {{Form::text('e_price',$equipment->e_price,['classes'=>'form-control', 'placeholder'=>'Price' ])}}
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
