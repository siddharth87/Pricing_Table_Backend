<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pricing;
class PricingsAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pricings=Pricing::all();
        return view("pricing.admin")->with("pricings",$pricings);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pricing.create');
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
            'name'=>'required',
            'category'=>'required',
            'price'=>'required',
            'unit'=>'required',
        ]);

        $pricings=new Pricing;
        $pricings->Name=$request->input('name');
        $pricings->Category=$request->input('category');
        $pricings->Price=$request->input('price');
        $pricings->Unit=$request->input('unit');
        $pricings->save();

        return redirect('/pricingAdmin')->with('success','Entry created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Pcode)
    {
        $pricing=Pricing::find($Pcode);
        return view("pricing.edit")->with("pricing",$pricing);



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Pcode)
    {
        $this->validate($request,[
            'name'=>'required',
            'category'=>'required',
            'price'=>'required',
            'unit'=>'required',
        ]);

        $pricings=Pricing::find($Pcode);
        $pricings->Name=$request->input('name');
        $pricings->Category=$request->input('category');
        $pricings->Price=$request->input('price');
        $pricings->Unit=$request->input('unit');
        $pricings->save();

        return redirect('/pricingAdmin')->with('success','Entry updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Pcode)
    {
        $pricing=Pricing::find($Pcode);
        $pricing->delete();
        return redirect('/pricingAdmin')->with('success','Entry Deleted');
    }
}
