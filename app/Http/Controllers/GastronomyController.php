<?php namespace solyluna\Http\Controllers;

use solyluna\Http\Requests;
use solyluna\Http\Controllers\Controller;

use Illuminate\Http\Request;

class GastronomyController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function addchef()
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
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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
	public function show($id)
	{
		//
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
