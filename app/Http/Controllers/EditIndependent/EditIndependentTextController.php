<?php namespace solyluna\Http\Controllers\EditIndependent;

use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use solyluna\Http\Requests;
use solyluna\Http\Controllers\Controller;

use Illuminate\Http\Request;
use solyluna\Http\Requests\CreateTextIndependentRequest;
use solyluna\TextIndependent;
use solyluna\TextWelcome;
use solyluna\User;


class EditIndependentTextController extends Controller {

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
	public function create()
	{
		$count = TextIndependent::select('id')
			->count();
		if($count >= 1)
		{
			return $this->show();
		}
		else{
			$user_id = Auth::user()->id;
			$user_role = User::findOrfail($user_id);
			$welcometext = TextWelcome::findOrfail(3);
			return view('admin.text.independent.create', compact('user_role','welcometext'));
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateTextIndependentRequest $request)
	{
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		$welcometext = TextWelcome::findOrfail(3);
		$textIndependent = new TextIndependent($request->all());
		$textIndependent->save();
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
		$edit = TextIndependent::all();
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		$welcometext = TextWelcome::findOrfail(3);
		return view('admin.text.independent.show', compact('user_role', 'welcometext', 'edit'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		$edit = TextIndependent::findOrfail(1);
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		$welcometext = TextWelcome::findOrfail(3);
		return view('admin.text.independent.edit', compact('user_role', 'welcometext', 'edit'));
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
		$text = TextIndependent::findOrFail($id);
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
