<?php namespace solyluna\Http\Controllers;

use solyluna\Amenity;
use solyluna\File;
use solyluna\Gastronomy;
use solyluna\Http\Requests;
use solyluna\Http\Controllers\Controller;

use Illuminate\Http\Request;
use solyluna\Picture;
use solyluna\Property;

class VistasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function vistapropiedad(Request $request)
	{
		$property_id = $request->input('property_id');


		$properties = Property::select('id', 'name', 'image', 'status', 'num_bedrooms', 'description','slogan',
			'country_id', 'service_id', 'state_id', 'city_id', 'property_type_id', 'user_id')
			->with('country')->with('service')->with('state')->with('city')->with('property_type')->with('user')
			->orderBy('name', 'ASC')
			->get();

		$amenities = Amenity::select('amenity','category')
		->where ('property_id','=',$property_id)
			->where ('category','=',"Special amenities")
		->get();

		$service_a = Amenity::select('amenity','category')
			->where ('property_id','=',$property_id)
			->where ('category','=',"services")
			->get();

		$technology_a = Amenity::select('amenity','category')
			->where ('property_id','=',$property_id)
			->where ('category','=',"technology")
		->get();

		$pictures = Picture::select('image1','image2','image3','image4','image5','image6','image7','image8','image9')
			->where ('property_id','=',$property_id)
			->get();
		$files = File::select('activities')
				->where ('property_id','=',$property_id)
				->get();

		return view('vistapropiedad',compact('properties','property_id','service','state', 'city',
			'property_type', 'user', 'user_role','amenity','slogan','amenities','amenity','service_a',
			'technology_a','pictures','files'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function gastronomy(Request $request)
	{
		$property_id = $request->input('property_id');

		$properties = Property::select('id', 'name', 'image', 'status', 'num_bedrooms', 'description','slogan',
			'country_id', 'service_id', 'state_id', 'city_id', 'property_type_id', 'user_id')
			->with('country')->with('service')->with('state')->with('city')->with('property_type')->with('user')
			->orderBy('name', 'ASC')
			->get();

		$chef = Gastronomy::select('nombre','apellidos','acerca','docencia','image')
			->where('property_id', '=', $property_id)
			->get();
		$files = File::select('menu','drinks')
			->where ('property_id','=',$property_id)
			->get();
			return view('gastronomy',compact('properties','property_id','chef','files'));

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
	public function casasassisting()
	{
		$properties = Property::select('id', 'name', 'image', 'status', 'num_bedrooms', 'description', 'country_id', 'service_id', 'state_id', 'city_id', 'property_type_id', 'user_id')
			->with('country')->with('service')->with('state')->with('city')->with('property_type')->with('user')
			->orderBy('name', 'ASC')
			->get();
		return view('Acasas',compact('properties','service','state', 'city', 'property_type', 'user', 'user_role'));
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
