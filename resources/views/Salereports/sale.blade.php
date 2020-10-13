@extends('layouts.app')

@section ('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __(' SALE REPORTS') }}</div>


                  <div class="card-body">
                    @if(count($deploys ) > 0)

                                    <div class="card-body">

                                      <table class="table table-striped">
                                             <tbody>
                                                      <tr>
                                                          <th>Supplier Name</th>
                                                          <th>Equipment Name</th>
                                                              <th>School</th>
                                                            <th>Quantity</th>
                                                              <th>Price</th>
                                                              <th >Total Price</th>
                                                            <th >Date</th>
                                                              <td class="w-25">
                                                      </tr>

                                             </tbody>
                                      </table>
                                          @foreach ($deploys as $deploys)

                                          <table class="table table-hover">
                                                   <tbody>
                                                            <tr>
                                                                <td class="w-15">{{$deploys->d_employee}}</th>
                                                                <td class="w-15">{{$deploys->d_equipment}}</th>
                                                                  <td class="w-15">{{$deploys->d_school}}</th>
                                                                        <td class="w-15">{{$deploys->d_quantity}}</th>
                                                                    <td class="w-15">{{$deploys->d_price}}</th>
                                                                      <td>{{$deploys->d_tprice}}</th>
                                                                          <td>{{$deploys->d_date}}</th>
                                                                      

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
