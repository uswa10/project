<?php

namespace App\Http\Controllers;
use App\Models\Stock;
use App\Models\Equipment;
use Illuminate\Http\Request;

use DB;
class StockController extends Controller
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
return view ('stock.reports');
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
        'stock_ename'=>'required',
        'stock_sname'=>'required',
          'stock_id'=>'required',
          'stock_quantity' => 'required'
      ]);
      $stock = new stock;
      $stock->stock_ename = $request->input('stock_ename');
      $stock->stock_sname = $request->input('stock_sname');
      $stock->stock_quantity = $request->input('stock_quantity');
        $stock->stock_id = $request->input('stock_id');

      $stock->stock_tprice = $request->input('stock_tprice');








$stock->save();
DB::table('stocks')
->select('stocks.stock_quantity','equipment.e_stock')
->join('equipment', 'equipment.e_name', 'stocks.stock_ename')
->where('equipment.e_name', $stock->stock_ename)

->update(array(
'stock_tprice' => DB::raw('stock_quantity * e_price'),
'stock_price' => DB::raw('e_price')



));

DB::table('equipment')
->where('equipment.e_name', $stock->stock_ename)
->increment ('e_stock', $request->get('stock_quantity'));



      return redirect('stock/purchase')->with('success','Stock Added.');
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
      $suppliers = DB::select('select * from suppliers');
      $stocks = DB::select('select * from stocks where stock_id = stock_id');
return view('stock.purchase',['equipment'=>$equipment, 'suppliers'=>$suppliers, 'stocks'=>$stocks ]);



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
        return view('stock.purchase')->with('equipment', $equipment);
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
