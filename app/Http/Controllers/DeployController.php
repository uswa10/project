<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;
use App\Models\Employee;
use App\Models\Deploy;
use App\Models\Reports;
use DB;
class DeployController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
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
        'd_employee'=>'required',
        'd_equipment'=>'required',
          'd_school'=>'required',
          'd_quantity' => 'required'
      ]);
      $deploys = new deploy;
      $deploys->d_employee = $request->input('d_employee');
      $deploys->d_equipment = $request->input('d_equipment');
      $deploys->d_school = $request->input('d_school');
        $deploys->d_quantity = $request->input('d_quantity');

      $deploys->d_tprice = $request->input('d_tprice');




$deploys->save();
DB::table('deploys')
->select('deploys.d_quantity','equipment.e_stock')
->join('equipment', 'equipment.e_name', 'deploys.d_equipment')
->where('equipment.e_name',  $deploys->d_equipment)

->update(array(
'd_tprice' => DB::raw('d_quantity * e_price'),
'd_price' => DB::raw('e_price')
));

DB::table('equipment')
->where('equipment.e_name', $deploys->d_equipment)
->decrement ('e_stock', $request->get('d_quantity'));

  return redirect('deploy/dcreate')->with('success', 'Deployed');
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
      $equipment = DB::select('select * from equipment');


return view('deploy.dcreate',['equipment'=>$equipment, 'employees'=>$employees ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
