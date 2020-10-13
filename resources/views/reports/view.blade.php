
@extends ('layouts.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __('EDIT SUPPLIER') }}</div>

                  <div class="card-body">


  <div class="form-group">
    {{Form::label('stock_id','Supplier Name')}}
    {{Form::text('stock_id',$stocks->stock_id,['classes'=>'form-control', 'placeholder'=>'Supplier Name' ])}}
  </div>
  <div class="form-group">
    {{Form::label('stock_sname','Email')}}
    {{Form::text('stock_sname',$stocks->stock_sname,['classes'=>'form-control', 'placeholder'=>'Email' ])}}
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
