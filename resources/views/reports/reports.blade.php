@extends('layouts.app')

@section ('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __(' PURCHASE REPORTS') }}</div>


                  <div class="card-body">
                    @if(count($stocks) > 0)

                                    <div class="card-body">

                                      <table class="table table-striped">
                                             <tbody>
                                                      <tr>
                                                          <th>Equipment Name</th>
                                                          <th>Supplier Name</th>
                                                            <th>Quantity</th>
                                                              <th>Price</th>
                                                              <th >Total Price</th>
                                                            <th >Date</th>
                                                              <td class="w-25">
                                                      </tr>

                                             </tbody>
                                      </table>
                                          @foreach ($stocks as $stocks)

                                          <table class="table table-hover">
                                                   <tbody>
                                                            <tr>
                                                                <td class="w-15">{{$stocks->stock_ename}}</th>
                                                                <td class="w-15">{{$stocks->stock_sname}}</th>
                                                                  <td class="w-15">{{$stocks->stock_quantity}}</th>
                                                                    <td class="w-15">{{$stocks->stock_price}}</th>
                                                                      <td>{{$stocks->stock_tprice}}</th>
                                                                          <td>{{$stocks->stock_bdate}}</th>


                                                            </tr>

                                                   </tbody>
                                            </table>


                                          @endforeach


                                        </div>
                                      @endif


                </div>
                </div>
                </div>
                </div>
                </div>
                </div>

                @endsection
