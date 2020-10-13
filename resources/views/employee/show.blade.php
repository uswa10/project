@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EMPLOYEE LIST') }}</div>
<div class="card-body">
<a href="/employee/add" >Add Employee</a> <br>
                    @if(count($employees) > 0)



                                      <table class="table table-striped">
                                             <tbody>
                                                      <tr>
                                                          <th class="w-25">Employee Name</th>

                                                          <th class="w-25">Contact</th>
                                                          <th class="w-25">Address</th>
                                                            <th class="w-25"></th>
                                                              



                                                      </tr>

                                             </tbody>
                                      </table>
                                          @foreach ($employees as $employees)

                                          <table class="table table-hover">
                                                   <tbody>
                                                            <tr>
                                                                <td class="w-25">{{$employees->emp_fname}} {{$employees->emp_lname}}</th>

                                                                <td class="w-25">{{$employees->emp_contact}}</th>
                                                                  <td class="w-25">{{$employees->emp_address}}</th>
                                                                    <td>    <a href="/employee/{{$employees->emp_id}}/edit" class="btn btn-primary">Edit</a> <br></th>



                                                                      <td>  {!!Form::open(['action'=>['App\Http\Controllers\EmployeeController@destroy', $employees->emp_id], 'method'=>'POST', 'class' => 'pull-right'])!!} {{Form::hidden('_method','DELETE')}} {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}   {!!Form::close()!!}</th>


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
