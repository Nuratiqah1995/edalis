<?php

namespace App\Http\Controllers;

use App\SalesInfo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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

    public function reportChart()
    {
        // $data1 = DB::table('sales_infos')
        //     ->select('profiles.campus', DB::raw('COUNT(profiles.campus) as counter'))
        //     ->join('users', 'users.id', '=', 'sales_infos.user_id')
        //     ->join('profiles', 'profiles.user_id', '=', 'users.id')
        //     ->groupBy('profiles.campus')
        $data1 = DB::table('users')
            ->select('profiles.campus', DB::raw('COUNT(profiles.campus) as counter'))
            ->join('profiles', 'profiles.user_id', '=', 'users.id')
            ->groupBy('campus')
            ->get();

        // return $data1;
        return view('entrepreneur_sales.report_chart')->with([
            'data1' => $data1,
        ]);
    }

    public function composeEmail()
    {
        return view('email.compose');
    }

    public function postComposeEmail(Request $request)
    {
        $users = User::where('role', 2)->get();

        foreach ($users as $user) {
            Mail::raw('Text to e-mail', function ($message) {
                $message->from('edalis@bounces.kiblat.my');
                $message->to('iqmalazim@gmail.com');
            });
        }
        return $request->all();
    }

    public function topWeekly()
    {
        // $sales = SalesInfo::orderBy('sales', 'DESC')
        //     ->where(\DB::raw('YEARWEEK(`created_at`, 1)'), '=', \DB::raw('YEARWEEK(CURDATE(), 1)'))
        //     ->limit(5)->get();
        $sales = SalesInfo::where('type', 'Weeks')->get();

        return view('entrepreneur_sales.top')->with([
            'sales' => $sales,
        ]);
    }

    public function topMonthly()
    {
        // $sales = SalesInfo::orderBy('sales', 'DESC')
        //     ->where(\DB::raw('MONTH(created_at)'), '=', date('n'))
        //     ->limit(5)->get();
        $sales = SalesInfo::where('type', 'Months')->get();

        return view('entrepreneur_sales.top')->with([
            'sales' => $sales,
        ]);

    }

    public function topYearly()
    {
        // $sales = SalesInfo::orderBy('sales', 'DESC')
        //     ->where(\DB::raw('YEAR(created_at)'), '=', date('Y'))
        //     ->limit(5)->get();
        $sales = SalesInfo::where('type', 'Years')->get();

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
}
