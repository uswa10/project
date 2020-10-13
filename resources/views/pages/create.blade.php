@extends('layouts.app')

@section ('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __('ADD EQUIPMENT') }}</div>

                  <div class="card-body">
    {!! Form::open(['action' => 'App\Http\Controllers\EquipmentController@store', 'method' => 'POST']) !!}

    <div class="form-group">
      {{Form::label('e_name','Equipment Name:')}}
      {{Form::text('e_name','',['classes'=>'form-control', 'placeholder'=>'Equipment Name' ])}}
    </div>
    <div class="form-group">
      {{Form::label('e_price','Price:')}}
      {{Form::text('e_price','',['classes'=>'form-control', 'placeholder'=>'Price' ])}}
    </div>
    <div class="form-group">
      {{Form::label('e_sellingprice','Selling Price:')}}
      {{Form::text('e_sellingprice','',['classes'=>'form-control', 'placeholder'=>'Selling Price' ])}}
    </div>
    <div class="form-group">
      {{Form::hidden('e_stock','Stock:')}}
      {{Form::hidden('e_stock','0',['classes'=>'form-control', 'placeholder'=>'Stock' ])}}
    </div>






    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close()!!}
  </div>
  </div>
</div>
</div>
</div>
</div>
  @endsection
