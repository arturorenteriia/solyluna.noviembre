<?php namespace solyluna\Http\Requests;

use solyluna\Http\Requests\Request;

class CreateImagesRequest extends Request {

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
			'image1'=>'required',
			'image2'=>'required',
			'image3'=>'required',
			'image4'=>'required',
			'image5'=>'required',
			'image6'=>'required',
			'image7'=>'required',
			'image8'=>'required',
			'image9'=>'required',

		];
	}

}
