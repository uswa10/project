@extends ('layouts.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __('EDIT SUPPLIER') }}</div>

                  <div class="card-body">
  {!! Form::open(['action' => ['App\Http\Controllers\SupplierController@update',$supplier->s_id], 'method' => 'POST']) !!}

  <div class="form-group">
    {{Form::label('s_name','Supplier Name')}}
    {{Form::text('s_name',$supplier->s_name,['classes'=>'form-control', 'placeholder'=>'Supplier Name' ])}}
  </div>
  <div class="form-group">
    {{Form::label('s_email','Email')}}
    {{Form::text('s_email',$supplier->s_email,['classes'=>'form-control', 'placeholder'=>'Email' ])}}
  </div>
  <div class="form-group">
    {{Form::label('s_contact','Contact')}}
    {{Form::text('s_contact',$supplier->s_contact,['classes'=>'form-control', 'placeholder'=>'Contact' ])}}
  </div>
  <div class="form-group">
    {{Form::label('s_address','Address')}}
    {{Form::text('s_address',$supplier->s_address,['classes'=>'form-control', 'placeholder'=>'Address' ])}}
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
