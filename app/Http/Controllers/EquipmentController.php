<?php

namespace App\Http\Controllers;
use App\Models\Equipment;
use Illuminate\Http\Request;

use DB;
class EquipmentController extends Controller
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

  return view ('pages.create');
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
        'e_name'=>'required',
        'e_price'=>'required'

      ]);
      $equipment = new equipment;
      $equipment->e_name = $request->input('e_name');
      $equipment->e_price = $request->input('e_price');
        $equipment->e_sellingprice = $request->input('e_sellingprice');
          $equipment->e_stock = $request->input('e_stock');



      $equipment->save();

      return redirect('pages/show')->with('success','Equipment Added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $equipment = DB::select('select * from equipment');
return view('pages.show',['equipment'=>$equipment]);




    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $equipment = Equipment::find($id);
            return view('pages.edit')->with('equipment', $equipment);
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
    'e_name' => 'required',
    'e_price' => 'required'
  ]);
  $equipment = equipment::find($id);
  $equipment->e_name = $request->input('e_name');
  $equipment->e_price = $request->input('e_price');
  $equipment->save();

  return redirect('/pages/show')->with('success','Post Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $equipment = Equipment::find($id);
      $equipment->delete();


          return redirect('/pages/show')->with('success','Equipment Deleted.');

    }
}
