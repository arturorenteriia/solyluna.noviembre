<?php namespace solyluna\Http\Controllers\Bedroom;


use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use solyluna\Bedroom;
use solyluna\Http\Controllers\Controller;

use solyluna\Http\Requests\CreateBedRoomRequest;
use solyluna\Property;
use solyluna\User;

class BedRoomController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
		$properties = Bedroom::select('id', 'bedroom_asigned', 'status', 'beds', 'size_metrics', 'description', 'image', 'property_id')
			->with('Property')
			->where('property_id', '=', $id)
			->get();
		$count = Bedroom::select('id', 'property_id')
			->with('Property')
			->where('property_id', '=', $id)
			->count();
		return view('admin.properties.bedrooms.show', compact('properties', 'count'));
		//dd($properties);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id, Redirector $redirector)
	{
		$rooms = Bedroom::select('property_id')
			->where('property_id', '=', $id)
			->count();
		$Arooms = Property::select('id','num_bedrooms')
			->where('id', '=', $id)
			->get('num_bedrooms');
		foreach($Arooms as $bedrooms)
		{
			$num = $bedrooms->num_bedrooms;
			if($rooms < $num)
			{
				$user_id = Auth::user()->id;
				$user_role = User::findOrfail($user_id);
				$bedroom = Property::findOrFail($id);
				return view('admin.properties.bedrooms.index',compact('bedroom','user_role'));
			}
			else{
				return $redirector->back();
			}
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateBedRoomRequest $request)
	{
		$file = Input::file('image');
		if(Input::hasFile('image'))
		{
			$fileName = $file->getClientOriginalName();
			$path = public_path().'\uploads\\';

			$bedroom = new Bedroom($request->all());
			$bedroom->image = $fileName;

			if($file->move($path, $fileName))
			{
				$bedroom->save();
				return redirect()->route('admin.properties.show');
			}
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

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
