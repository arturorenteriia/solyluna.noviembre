<?php namespace solyluna\Http\Requests;

use solyluna\Http\Requests\Request;

class ContactoRequest extends Request {

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
			'first_name' => 'required',
			'last_name' => 'required',
			'email' => 'required', //users es la tabla e email la columna
			'telephone' => 'required',
			'subject' => 'required',
			'country' => 'required',
			'state' => 'required',
			'city' => 'required',
			'zip_code' => 'required',
			'body' => 'required',
		];
	}

}
