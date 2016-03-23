<?php namespace solyluna\Http\Controllers\About;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use solyluna\About;
use solyluna\Http\Requests;
use solyluna\Http\Controllers\Controller;

use Illuminate\Http\Request;
use solyluna\User;

class EditAboutController extends Controller {

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
		$count = About::select('id')
			->count();
		if($count >= 1)
		{
			return $this->show();
		}
		else{
			$user_id = Auth::user()->id;
			$user_role = User::findOrfail($user_id);
			return view('admin.text.about.create', compact('user_role'));
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
		$text = new About($request->all());
		$text->save();
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
		$edit = About::all();
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		return view('admin.text.about.show', compact('user_role', 'edit'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$edit = About::findOrfail(1);
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		return view('admin.text.about.edit', compact('user_role', 'edit'));
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
		$text = About::findOrFail($id);
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
