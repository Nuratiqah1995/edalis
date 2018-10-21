<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\SalesInfo;

class SalesInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
   
    {

        $user = Auth::user();
        @$sale = SalesInfo::where('user_id',Auth::user()->id)->first();

        return view('sales_info.edit')->with([

            'sale' => $sale,

        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sales (Request $request)
    {
        $sale = SalesInfo::where('user_id',Auth::user()->id)->where('type',$request->type)->first();
        // return info;

        if (!$sale){
            $sale = new SalesInfo();
        } 
        
        $sale->user_id = Auth::user()->id;
        $sale->type = $request->type;
        $sale->market_target = $request->market_target;
        $sale->modal = $request->modal;
        $sale->sales = $request->sales;
        $sale->save();
        return redirect()->back();
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
        //
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
