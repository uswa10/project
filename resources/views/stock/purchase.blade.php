@extends('layouts.app')

@section ('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __('ADD EQUIPMENT STOCK') }}</div>

                  <div class="card-body">

    {!! Form::open(['action' => 'App\Http\Controllers\StockController@store',  'method' => 'POST']) !!}

    <div class="form-group">
      <select class="form-control" name="stock_sname">
                @foreach($suppliers as $suppliers)
                <option value="{{ $suppliers->s_name }}">{{ $suppliers->s_name }}</option>
                  @endforeach
              </select>
    </div>
    <div class="form-group">
      <select class="form-control" name="stock_ename" >
        @foreach($equipment as $equipment)

                <option value="{{ $equipment->e_name }} ">{{ $equipment->e_name }}</option>

@endforeach



              </select>
</div>



    <div class="form-group">
      {{Form::label('stock_quantity','Quantity:')}}
      {{Form::text('stock_quantity','',['classes'=>'form-control', 'placeholder'=>'Quantity' ])}}
    </div>



    <div class="form-group">
      {{Form::label('stock_id','Invoice:')}}
      {{Form::text('stock_id','',['classes'=>'form-control', 'placeholder'=>'Invoice' ])}}
    </div>


    {{Form::submit('Add Item', ['class' => 'btn btn-primary'])}}


    {!! Form::close()!!}



    








  </div>

  </div>

  </div>
  </div>

  </div>
  </div>

  @endsection
