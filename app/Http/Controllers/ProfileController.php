<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Profile;
use App\User;
use App\Address;
use App\ParentInformation;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        @$profile = Profile::where('user_id',Auth::user()->id)->first();
        @$address = Address::where('entity_id',Auth::user()->id)->first();
        @$father = ParentInformation::where('user_id',Auth::user()->id)->where('type',1)->first();
        @$mother = ParentInformation::where('user_id',Auth::user()->id)->where('type',2)->first();
        // dd($father->address);
        // dd($profile);
        return view('profile.edit')->with([
            'user' => $user,
            'profile' => @$profile,
            'address' => @$address,
            'father' => @$father,
            'mother' => @$mother
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function personal(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->ic_number = $request->ic_number;
        $user->phone_number = $request->phone_number;
        $user->age = $request->age;
        $user->save();
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function study(Request $request)
    {
        $profile = Profile::where('user_id',Auth::user()->id)->first();

        if (!$profile){
            $profile = new Profile();
        } 
        $profile->user_id = Auth::user()->id;
        $profile->campus = $request->campus;
        $profile->programme = $request->programme;
        $profile->semester = $request->semester;
        $profile->level_study = $request->level_study;
        $profile->save();
        return redirect()->back();

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function address(Request $request)
    {
        // dd($request->all());
        $address = Address::where('entity_id',Auth::user()->id)->first();

        if (!$address){
            $address = new Address();
        } 
        $address->entity_id = Auth::user()->id;
        $address->type = 1; //address user
        $address->address_1 = $request->address_1;
        $address->address_2 = $request->address_2;
        $address->city = $request->city;
        $address->state = $request->state;
        $address->postcode = $request->postcode;
        $address->save();
        return redirect()->back();

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function parent(Request $request)
    {
        // dd($request->all());
        $parent = ParentInformation::where('user_id',Auth::user()->id)->where('type',$request->type)->first();
        // $parent_address = Parent::where('entity_id',Auth::user()->id)->first();

        if (!$parent){
            $parent = new ParentInformation();
        } 
        $parent->user_id = Auth::user()->id;
        $parent->type = $request->type; //parent info
        $parent->name = $request->name;
        $parent->phone_no = $request->phone_number;
        $parent->save();
        
        if(!@$parent->address)
        {
            $parent_address = new Address();

            $parent_address->address_1 = $request->address_1;
            $parent_address->address_2 = $request->address_2;
            $parent_address->city = $request->city;
            $parent_address->state = $request->state;
            $parent_address->postcode = $request->postcode;
            $parent_address->type = $request->address_type;
            $parent_address->entity_id = $parent->id;
            $parent_address->save();
            
        } else {
            
            $parent->address->address_1 = $request->address_1;
            $parent->address->address_2 = $request->address_2;
            $parent->address->city = $request->city;
            $parent->address->state = $request->state;
            $parent->address->postcode = $request->postcode;
            
            $parent->address->save();
        }

        return redirect()->back();

        
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
