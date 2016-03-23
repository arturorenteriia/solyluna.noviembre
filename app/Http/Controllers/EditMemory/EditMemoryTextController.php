<?php namespace solyluna\Http\Controllers\EditMemory;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use solyluna\Http\Requests;
use solyluna\Http\Controllers\Controller;

use Illuminate\Http\Request;
use solyluna\Http\Requests\CreateMemoryTextRequest;
use solyluna\TextMemory;
use solyluna\TextWelcome;
use solyluna\User;

class EditMemoryTextController extends Controller {

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
		$count = TextMemory::select('id')
			->count();
		if($count >= 1)
		{
			return $this->show();
		}
		else{
			$user_id = Auth::user()->id;
			$user_role = User::findOrfail($user_id);
			return view('admin.text.memory.create', compact('user_role'));
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
		$textMemory = new TextMemory($request->all());
		$textMemory->save();
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
		$edit = TextMemory::all();
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		return view('admin.text.memory.show', compact('user_role', 'edit'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$edit = TextMemory::findOrfail(1);
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		return view('admin.text.memory.edit', compact('user_role', 'edit'));
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
		$text = TextMemory::findOrFail($id);
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
