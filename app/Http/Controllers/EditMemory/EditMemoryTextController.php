<?php namespace solyluna\Http\Controllers\EditMemory;

use Illuminate\Support\Facades\Auth;
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
			$welcometext = TextWelcome::findOrfail(3);
			return view('admin.text.memory.create', compact('user_role','welcometext'));
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateMemoryTextRequest $request)
	{
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		$welcometext = TextWelcome::findOrfail(3);
		$textMemory = new TextMemory($request->all());
		$textMemory->save();
		return view('admin.control.admin', compact('user_role', 'welcometext'));
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
		$welcometext = TextWelcome::findOrfail(3);
		return view('admin.text.memory.show', compact('user_role', 'welcometext', 'edit'));
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
		$welcometext = TextWelcome::findOrfail(3);
		return view('admin.text.memory.edit', compact('user_role', 'welcometext', 'edit'));
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
		$welcometext = TextWelcome::findOrfail(3);
		$text = TextMemory::findOrFail($id);
		$text->fill(\Request::all());
		$text->save();
		return view('admin.control.admin',	 compact('user_role', 'welcometext'));
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
