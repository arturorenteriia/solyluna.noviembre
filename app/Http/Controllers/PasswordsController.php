<?php namespace solyluna\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use solyluna\Http\Requests;
use solyluna\Http\Controllers\Controller;

use Illuminate\Http\Request;
use solyluna\Http\Requests\ChangePasswordRequest;
use solyluna\User;


class PasswordsController extends Controller {

	public function change()
    {
        $user_id = Auth::user()->id;
        $user_role = User::findOrfail($user_id);
        return view('admin.users.changepass', compact('user_role'));
    }

    public function reset_password(Request $request)
    {
        dd($request);
    }
}
