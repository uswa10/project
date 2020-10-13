<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;
use DB;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
        'emp_fname'=>'required',
        'emp_lname'=>'required',
        'emp_contact'=>'required',
          'emp_address'=>'required'


      ]);
      $employees = new employee;
      $employees->emp_fname = $request->input('emp_fname');
      $employees->emp_lname = $request->input('emp_lname');
        $employees->emp_contact = $request->input('emp_contact');
          $employees->emp_address = $request->input('emp_address');



      $employees->save();

      return redirect('employee/show')->with('success','Employee Added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $employees = DB::select('select * from employees');
return view('employee.show',['employees'=>$employees]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $employees = Employee::find($id);
        return view('employee.edit')->with('employee', $employees);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request,[
    'emp_fname' => 'required',
      'emp_lname' => 'required',
        'emp_contact' => 'required',
    'emp_address' => 'required'
  ]);
  $employees = employee::find($id);
  $employees->emp_fname = $request->input('emp_fname');
  $employees->emp_lname = $request->input('emp_lname');
  $employees->emp_contact = $request->input('emp_contact');
  $employees->emp_address = $request->input('emp_address');
  $employees->save();

  return redirect('/employee/show')->with('success','Employee Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $employee = Employee::find($id);
      $employee->delete();


          return redirect('/employee/show')->with('success','Employee Deleted.');
    }
}
