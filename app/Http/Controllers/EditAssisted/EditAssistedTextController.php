<?php namespace solyluna\Http\Controllers\EditAssisted;

use Illuminate\Support\Facades\Auth;
use solyluna\Http\Requests;
use solyluna\Http\Controllers\Controller;

use Illuminate\Http\Request;
use solyluna\Http\Requests\CreateAssistedTextRequest;
use solyluna\TextAssited;
use solyluna\TextIndependent;
use solyluna\TextWelcome;
use solyluna\User;

class EditAssistedTextController extends Controller {

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
		$count = TextAssited::select('id')
			->count();

		if($count >= 1)
		{
			return $this->show();
		}
		else {
			$user_id = Auth::user()->id;
			$user_role = User::findOrfail($user_id);
			$welcometext = TextWelcome::findOrfail(3);
			return view('admin.text.assisted.create', compact('user_role','welcometext'));
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateAssistedTextRequest $request)
	{
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		$welcometext = TextWelcome::findOrfail(3);
		$textAssisted = new TextAssited($request->all());
		$textAssisted->save();
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
		$edit = TextAssited::all();
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		$welcometext = TextWelcome::findOrfail(3);
		return view('admin.text.assisted.show', compact('user_role', 'welcometext', 'edit'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$edit = TextAssited::findOrfail(1);
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		$welcometext = TextWelcome::findOrfail(3);
		return view('admin.text.assisted.edit', compact('user_role', 'welcometext', 'edit'));
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
		$text = TextAssited::findOrFail($id);
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