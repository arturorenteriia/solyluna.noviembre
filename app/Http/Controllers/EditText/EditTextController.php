<?php namespace solyluna\Http\Controllers\EditText;

use Illuminate\Support\Facades\Auth;
use solyluna\Http\Requests;
use solyluna\Http\Controllers\Controller;

use Illuminate\Http\Request;
use solyluna\Http\Requests\WelcomeTextRequest;
use solyluna\TextWelcome;
use solyluna\User;

class EditTextController extends Controller {

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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(WelcomeTextRequest $request)
    {
        $welcome = new TextWelcome($request->all());
        $welcome->save();
        return view('admin.control');
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
        $user_id = Auth::user()->id;
        $user_role = User::findOrfail($user_id);
        $text = TextWelcome::findOrfail($id);
        $welcometext = TextWelcome::findOrfail(3);
        return view('admin.text.edit', compact('user_role','text', 'welcometext'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $text = TextWelcome::findOrFail($id);
        $text->fill(\Request::all());
        $text->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

    }

}
