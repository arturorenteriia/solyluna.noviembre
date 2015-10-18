<?php namespace solyluna\Http\Requests;

use solyluna\Http\Requests\Request;

class WelcomeTextRequest extends Request {

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
			'title'=>'required',
			'firstText'=>'required',
			'secondText'=>'required',
			'phrase'=>'required',
			'description'=>'required'
		];
	}

}
