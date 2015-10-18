<?php namespace solyluna\Http\Requests;

use solyluna\Http\Requests\Request;

class EditChefRequest extends Request {

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
			'nombre' => 'required',
			'apellidos' => 'required',
			'acerca' => 'required',
			'docencia' => 'required',
			'image' => 'required',
			'property_id' => 'required'
		];
	}

}
