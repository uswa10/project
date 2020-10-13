<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use Illuminate\Http\Request;
use DB;
class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DB::table('suppliers')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view ('supplier.create');
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
        's_name'=>'required',
        's_contact'=>'required',
          's_email'=>'required',
          's_address' => 'required'
      ]);
      $supplier = new supplier;
      $supplier->s_name = $request->input('s_name');
      $supplier->s_contact = $request->input('s_contact');

      $supplier->s_email = $request->input('s_email');
        $supplier->s_address = $request->input('s_address');

      $supplier->save();

      return redirect('supplier/wow')->with('success','Supplier Added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $suppliers = DB::select('select * from suppliers');
      return view('supplier.wow',['suppliers'=>$suppliers]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $supplier = supplier::find($id);
        return view('supplier.edit')->with('supplier', $supplier);
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
        's_name'=>'required',
        's_contact'=>'required',
          's_email'=>'required',
          's_address' => 'required'
  ]);
  $supplier = supplier::find($id);
  $supplier->s_name = $request->input('s_name');
  $supplier->s_contact = $request->input('s_contact');

  $supplier->s_email = $request->input('s_email');
    $supplier->s_address = $request->input('s_address');
  $supplier->save();

  return redirect('/supplier/wow')->with('success','Post Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $supplier = supplier::find($id);
      $supplier->delete();


          return redirect('/supplier/wow')->with('success','Supplier Deleted.');
    }
}
