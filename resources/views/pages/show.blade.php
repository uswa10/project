@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EQUIPMENT LIST') }}</div>
<div class="card-body">
<a href="/pages/create" >Add Equipment</a> <br>
                    @if(count($equipment) > 0)



                                      <table class="table table-striped">
                                             <tbody>
                                                      <tr>
                                                          <th class="w-150">Equipment Name</th>
                                                          <th class="w-150">Price</th>
                                                          <th class="w-25">Stock</th>
                                                            <th class="w-25"></th>


                                                      </tr>

                                             </tbody>
                                      </table>
                                          @foreach ($equipment as $equipment)

                                          <table class="table table-hover">
                                                   <tbody>
                                                            <tr>
                                                                <td class="w-50">{{$equipment->e_name}}</th>
                                                                <td class="w-50">{{$equipment->e_sellingprice}}</th>
                                                                  <td class="w-50">{{$equipment->e_stock}}</th>
                                                                <td>    <a href="/pages/{{$equipment->e_id}}/edit" class="btn btn-primary">Edit</a> <br></th>



                                                                  <td>  {!!Form::open(['action'=>['App\Http\Controllers\EquipmentController@destroy', $equipment->e_id], 'method'=>'POST', 'class' => 'pull-right'])!!} {{Form::hidden('_method','DELETE')}} {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}   {!!Form::close()!!}</th>


                                                            </tr>








                                          </tbody>
                                     </table>
                                          @endforeach

                                        </div>
                                      @endif



                      </span>
  </li>
                          </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
