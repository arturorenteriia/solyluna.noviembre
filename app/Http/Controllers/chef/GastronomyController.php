<?php namespace solyluna\Http\Controllers\chef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;
use solyluna\Bedroom;
use solyluna\Country;
use solyluna\File;
use solyluna\Gastronomy;
use solyluna\Http\Requests;
use solyluna\Http\Controllers\Controller;

use solyluna\Http\Requests\CreateChefRequest;
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
	public function create($id)
	{
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		$id_property = ($id);

		$agregar = Gastronomy::select('id')
			->where('property_id', '=', $id)
			->get();

		if (count($agregar) > 0) {
			Session::flash('yacreado','error');
			return redirect()->route('admin.properties.chef.show');

		} else {

			return view('admin.properties.chef.create', compact('id_property', 'user_id', 'user_role'));


		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateChefRequest $request)
	{


		$validate = new Gastronomy($request->all());
		$validate = $validate->property_id;

		$agregar = Gastronomy::select('id')
			->where('property_id', '=', $validate)
			->get();

					if(count($agregar)>0)


		{
			dd("esta casa ya tiene chef wey");

		}
		else {
			$file = Input::file('image');

			if (Input::hasFile('image')) {
				$fileName = $file->getClientOriginalName();
				$path = public_path() . '\uploads\\';

				$chef = new Gastronomy($request->all());
				$chef->image = $fileName;

				if ($file->move($path, $fileName)) {
					$chef->save();
					Session::flash('procesorealizado','exito');
					return redirect()->route('admin.properties.chef.show');
				}
			}

		}
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

		$tipomenu = Gastronomy::select('property_id')
						->get();

          
        return view('admin.properties.chef.show',compact('properties','service','state', 'city', 'property_type', 'user', 'user_role','tipomenu'));
    
	
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
