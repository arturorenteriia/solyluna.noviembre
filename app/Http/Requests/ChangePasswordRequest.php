<?php namespace solyluna\Http\Requests;

use solyluna\Http\Requests\Request;

class ChangePasswordRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'password' => 'required|min:6|current_password',
			'clave' => 'confirmed|min:6'
		];
	}

	public  function messages()
	{
		return [];
	}

	public  function sanitize()
	{
		return $this->only('clave');
	}

}
