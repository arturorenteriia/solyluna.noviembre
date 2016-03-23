<?php namespace solyluna\Http\Controllers\EditContacto;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use solyluna\Http\Requests;
use solyluna\Http\Controllers\Controller;

use Illuminate\Http\Request;
use solyluna\Http\Requests\CreateTextContactRequest;
use solyluna\Http\Requests\EditTextContactRequest;
use solyluna\TextContact;
use solyluna\User;


class EditContactController extends Controller {

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
		$count = TextContact::select('id')
			->count();
		if($count >= 1)
		{
			return $this->show();
		}
		else{
			$user_id = Auth::user()->id;
			$user_role = User::findOrfail($user_id);
			return view('admin.text.contact.create', compact('user_role'));
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateTextContactRequest $request)
	{
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		$textContact = new TextContact($request->all());
		$textContact->save();
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
		$edit = TextContact::all();
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		return view('admin.text.contact.show', compact('user_role', 'edit'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$edit = TextContact::findOrfail($id);
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		return view('admin.text.contact.edit', compact('user_role', 'edit'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, EditTextContactRequest $request)
	{
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		$text = TextContact::findOrFail($id);
		$text->fill($request->all());
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
