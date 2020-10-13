@extends('layouts.app')

@section ('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __('ADD EQUIPMENT STOCK') }}</div>
{!! Form::open(['action' => 'App\Http\Controllers\StockController@update', 'method' => 'POST']) !!}
                  <div class="card-body">
@if(count($stocks) > 0)

                <div class="card-body">

                  <table class="table table-striped">
                         <tbody>
                                  <tr>
                                      <th class="w-50">Equipment Name</th>
                                      <th class="w-25">Supplier Name</th>
                                        <th class="w-25"></th>
                                  </tr>

                         </tbody>
                  </table>
                      @foreach ($stocks as $stocks)

                        <table class="table table-striped">
                               <tbody>
                                        <tr>
                                            <td class="w-50">{{$stocks->stock_ename}}</th>
                                            <td class="w-25">{{$stocks->stock_sname}}</th>
                                            <td class="w-25"></th>
                                        </tr>

                               </tbody>
                        </table>








                      @endforeach

                    </div>
                  @endif

                  {!! Form::open(['action' => ['App\Http\Controllers\StockController@update',$equipment->e_id], 'method' => 'POST']) !!}
                        {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Save', ['class' => 'btn btn-primary'])}}
                    {!! Form::close()!!}
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>

                @endsection
