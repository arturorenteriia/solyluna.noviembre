<?php namespace solyluna\Http\Controllers\EditText;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
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
        $count = TextWelcome::select('id')
            ->count();

        if($count >= 1)
        {
            return $this->show();
        }
        else {
            $user_id = Auth::user()->id;
            $user_role = User::findOrfail($user_id);
            return view('admin.text.create', compact('user_role'));
        }
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
        Session::flash('message', 'Se guardo el texto correctamento');
        return view('admin.control.admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        $edit = TextWelcome::all();
        $user_id = Auth::user()->id;
        $user_role = User::findOrfail($user_id);
        return view('admin.text.show', compact('user_role', 'edit'));
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
        return view('admin.text.edit', compact('user_role','text'));
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
        $text = TextWelcome::findOrFail($id);
        $text->fill(\Request::all());
        $text->save();
        Session::flash('message', 'El texto fue editado con exito');
        return view('admin.control.admin', compact('user_role'));
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
