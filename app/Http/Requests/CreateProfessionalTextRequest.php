<?php namespace solyluna\Http\Requests;

use solyluna\Http\Requests\Request;

class CreateProfessionalTextRequest extends Request {

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
			'title1' => 'required',
			'title2' => 'required',
			'text1'  => 'required',
			'text2'  => 'required',
			'text3'  => 'required',
			'text4'  => 'required',
			'text5'  => 'required',
			'text6'  => 'required',
			'text7'  => 'required'
		];
	}

}
