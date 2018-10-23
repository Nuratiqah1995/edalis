<?php

namespace App\Http\Controllers;

use App\SalesInfo;
use Illuminate\Http\Request;

class EntrepreneurSalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = SalesInfo::paginate(35);

        return view('entrepreneur_sales.index')->with([
            'sales' => $sales,
        ]);

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

    public function reportChart()
    {
        return view('entrepreneur_sales.report_chart');
    }

    public function composeEmail()
    {
        return view('index');
    }

    public function topWeekly()
    {
        $sales = SalesInfo::orderBy('sales', 'DESC')
            ->where(\DB::raw('YEARWEEK(`created_at`, 1)'), '=', \DB::raw('YEARWEEK(CURDATE(), 1)'))
            ->limit(5)->get();
        // dd($sales);

        return view('entrepreneur_sales.top')->with([
            'sales' => $sales,
        ]);
    }

    public function topMonthly()
    {
        $sales = SalesInfo::orderBy('sales', 'DESC')
            ->where(\DB::raw('MONTH(created_at)'), '=', date('n'))
            ->limit(5)->get();

        return view('entrepreneur_sales.top')->with([
            'sales' => $sales,
        ]);

    }

    public function topYearly()
    {
        $sales = SalesInfo::orderBy('sales', 'DESC')
            ->where(\DB::raw('YEAR(created_at)'), '=', date('Y'))
            ->limit(5)->get();

        return view('entrepreneur_sales.top')->with([
            'sales' => $sales,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sale = SaleInfo::find($id);
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
