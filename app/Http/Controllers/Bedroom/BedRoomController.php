<?php namespace solyluna\Http\Controllers\Bedroom;


use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use solyluna\Bedroom;
use solyluna\Http\Controllers\Controller;

use solyluna\Http\Requests\CreateBedRoomRequest;
use solyluna\Http\Requests\EditBedroomRequest;
use solyluna\Property;
use solyluna\User;

class BedRoomController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

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
				return view('admin.properties.bedrooms.index',compact('user_role', 'bedroom'));
			}
			else{
				Session::flash('message', "Ya se agregaron los $bedrooms->num_bedrooms cuartos, si la casa tiene mas cuartos modifica el numero de cuartos de la casa.");
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
			$path = base_path('../public_html/uploads');

			$bedroom = new Bedroom($request->all());
			$bedroom->image = $fileName;

			if($file->move($path, $fileName))
			{
				$bedroom->save();
				Session::flash('message', "El cuarto fue agregado correctamente");
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
		$properties = Bedroom::select('id', 'bedroom_asigned', 'status', 'beds', 'size_metrics', 'description', 'image', 'property_id')
			->with('Property')
			->where('property_id', '=', $id)
			->get();
		$count = Bedroom::select('id', 'property_id')
			->with('Property')
			->where('property_id', '=', $id)
			->count();
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		return view('admin.properties.bedrooms.show', compact('properties', 'count', 'user_role'));
		//dd($properties);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		$bedrooms = Bedroom::findOrFail($id);
		return view('admin.properties.bedrooms.edit', compact('user_role', 'bedrooms'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, EditBedroomRequest $request)
	{
		$file = Input::file('image');
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		$property = Bedroom::findOrFail($id);

		if(Input::hasFile('image'))
		{
			$fileName = $file->getClientOriginalName();
			$path = public_path().'/uploads/';

			if($file->move($path, $fileName))
			{
				$property->fill($request->all());
				$property->image = $fileName;
				$property->save();
				Session::flash('message', "El cuarto se modifico correctamente");
				return view('admin.control.admin', compact('user_role'));
			}
		}
		else
		{
			$property->fill($request->all());
			$property->save();
			Session::flash('message', "El cuarto se modifico correctamente");
			return redirect()->route('admin.properties.show', compact('user_role'));
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id, Redirector $redirector)
	{
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		$bedroom = Bedroom::findOrFail($id);
		$bedroom->delete();
		return view('admin.control.admin', compact('user_role'));
	}

}
