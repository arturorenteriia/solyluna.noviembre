<?php namespace solyluna\Http\Controllers\Characteristic;

use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use solyluna\Amenity;
use solyluna\Http\Requests;
use solyluna\Http\Controllers\Controller;

use Illuminate\Http\Request;
use solyluna\User;

class CharacteristicsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
		//id de la propiedad
		$property = $id;

		//usuario
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);

		//amenities
		$amenities = Amenity::where('property_id', '=', $property)
			->paginate(5);
		return view('admin.properties.characteristics.index',compact('user_role','property', 'amenities'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request, Redirector $redirector)
	{
		$this->validate($request, [
			'category' => 'required', 'amenity' => 'required',
		]);
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		$characteristic = new Amenity($request->all());
		$characteristic->save();
		return $redirector->back();
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
	public function destroy($id, Redirector $redirector)
	{
		$amenity = Amenity::findOrfail($id);
		$amenity->delete();
		return $redirector->back();

	}

}
