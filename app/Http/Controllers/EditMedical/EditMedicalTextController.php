<?php namespace solyluna\Http\Controllers\EditMedical;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use solyluna\Http\Requests;
use solyluna\Http\Controllers\Controller;

use Illuminate\Http\Request;
use solyluna\Http\Requests\CreateMedicalTextRequest;
use solyluna\TextMedical;
use solyluna\User;

class EditMedicalTextController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$count = TextMedical::select('id')
			->count();
		if($count >= 1)
		{
			return $this->show();
		}
		else{
			$user_id = Auth::user()->id;
			$user_role = User::findOrfail($user_id);
			return view('admin.text.medical.create', compact('user_role'));
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		$textMedical = new TextMedical($request->all());
		$textMedical->save();
		Session::flash('message', 'Se guardo el texto correctamento');
		return view('admin.panel.admin', compact('user_role'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		$edit = TextMedical::all();
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		return view('admin.text.medical.show', compact('user_role', 'edit'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$edit = TextMedical::findOrfail(1);
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		return view('admin.text.medical.edit', compact('user_role', 'edit'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		$text = TextMedical::findOrFail($id);
		$text->fill(\Request::all());
		$text->save();
		Session::flash('message', 'El texto fue editado con exito');
		return view('admin.panel.admin',	 compact('user_role'));
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
