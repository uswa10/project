@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('SUPPLIER LIST') }}</div>

                    @if(count($suppliers) > 0)

                                    <div class="card-body">
<a href="/supplier/create" >Add Supplier</a> <br>
                                      <table class="table table-striped">
                                             <tbody>
                                                      <tr>
                                                          <th class="w-10">Supplier Name</th>
                                                          <th class="w-10">Contact</th>
                                                          <th class="w-10">Email</th>
                                                            <th class="w-10">Address</th>
                                                            <th class="w-25"></th>


                                                      </tr>

                                             </tbody>
                                      </table>
                                          @foreach ($suppliers as $suppliers)

                                            <table class="table table-striped">
                                                   <tbody>
                                                            <tr>
                                                                <td class="w-50">{{$suppliers->s_name}}</th>
                                                                <td class="w-10">{{$suppliers->s_contact}}</th>
                                                                  <td class="w-10">{{$suppliers->s_email}}</th>
                                                                      <td class="w-25">{{$suppliers->s_address}}</th>

                                                                <td class="w-25">    <a href="/supplier/{{$suppliers->s_id}}/edit" class="btn btn-primary">Edit</a> <br></th>



                                                                  <td class="w-25">  {!!Form::open(['action'=>['App\Http\Controllers\SupplierController@destroy', $suppliers->s_id], 'method'=>'POST', 'class' => 'pull-right'])!!} {{Form::hidden('_method','DELETE')}} {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}   {!!Form::close()!!}</th>

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
