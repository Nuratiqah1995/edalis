<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Address;
use App\BusinessInfo;

class BusinessInfoController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        @$info = BusinessInfo::where('user_id',Auth::user()->id)->first();
        @$address = BusinessInfo::where('user_id',Auth::user()->id)->first();

        return view('business_info.edit')->with([
           
            'info' => $info,
            'address' => $address,
            
            
        ]);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function info (Request $request)
    {
        $info = BusinessInfo::where('user_id',Auth::user()->id)->first();

        if (!$info){
            $info = new BusinessInfo();
        } 
        $info->user_id = Auth::user()->id;
        $info->company_name = $request->company_name;
        $info->registration_no = $request->registration_no;
        $info->company_type = $request->company_type;
        $info->category = $request->category;
        $info->business_type = $request->business_type;
        $info->business_field = $request->business_field;
        $info->capital = $request->capital;
        $info->save();
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function address (Request $request)
    {
        $business = BusinessInfo::where('user_id',Auth::user()->id)->first();
        
         
        
        if(!@$business->address)
        {
            $business_address = new Address();
            // dd(1);
            $business_address->address_1 = $request->address_1;
            $business_address->address_2 = $request->address_2;
            $business_address->city = $request->city;
            $business_address->state = $request->state;
            $business_address->postcode = $request->postcode;
            $business_address->type = 4; // sebab address bussiness
            $business_address->entity_id = $business->id;
            $business_address->save();
            
        } else {
            // dd(12);
            $business->address->address_1 = $request->address_1;
            $business->address->address_2 = $request->address_2;
            $business->address->city = $request->city;
            $business->address->state = $request->state;
            $business->address->postcode = $request->postcode;
            
            $business->address->save();
        }

        return redirect()->back();

    }
}
