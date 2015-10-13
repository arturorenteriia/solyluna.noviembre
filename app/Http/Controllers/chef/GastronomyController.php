<?php namespace solyluna\Http\Controllers\chef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;
use solyluna\Bedroom;
use solyluna\Country;
use solyluna\File;
use solyluna\Http\Requests;
use solyluna\Http\Controllers\Controller;

use solyluna\Http\Requests\CreatePropertyRequest;
use solyluna\Http\Requests\CreateUserRequest;
use solyluna\Http\Requests\EditPropertyRequest;
use solyluna\Http\Requests\FileRequest;
use solyluna\Property;
use solyluna\User;

class GastronomyController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function addchef()
	{



		 }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$user_id = Auth::user()->id;
        $user_role = User::findOrfail($user_id);
        $properties = Property::select('id', 'name', 'image', 'status', 'num_bedrooms', 'description', 'country_id', 'service_id', 'state_id', 'city_id', 'property_type_id', 'user_id')
            ->with('country')->with('service')->with('state')->with('city')->with('property_type')->with('user')
            ->orderBy('name', 'ASC')
            ->get();

            return view ('admin.properties.chef.create',compact('properties','user_id','user_role'));


	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		$user_id = Auth::user()->id;
        $user_role = User::findOrfail($user_id);

        $properties = Property::select('id', 'name', 'image', 'status', 'num_bedrooms', 'description', 'country_id', 'service_id', 'state_id', 'city_id', 'property_type_id', 'user_id')
            ->with('country')->with('service')->with('state')->with('city')->with('property_type')->with('user')
            ->orderBy('name', 'ASC')
            ->get();
          
        return view('admin.properties.chef.show',compact('properties','service','state', 'city', 'property_type', 'user', 'user_role'));
    
	
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
