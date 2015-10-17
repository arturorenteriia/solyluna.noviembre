<?php namespace solyluna\Http\Controllers\Images;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use solyluna\Http\Requests;
use solyluna\Http\Controllers\Controller;

use Illuminate\Http\Request;
use solyluna\Picture;
use solyluna\User;

class ImagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
		$property_id = $id;
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		return view('admin.properties.images.index', compact('user_role', 'property_id'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$file1 = Input::file('image1');
		$file2 = Input::file('image2');
		$file3 = Input::file('image3');
		$file4 = Input::file('image4');
		$file5 = Input::file('image5');
		$file6 = Input::file('image6');
		$file7 = Input::file('image7');
		$file8 = Input::file('image8');
		$file9 = Input::file('image9');
		if(Input::hasFile('image1') && Input::hasFile('image2') && Input::hasFile('image3')
			&& Input::hasFile('image4') && Input::hasFile('image5') && Input::hasFile('image6')
			&& Input::hasFile('image7') && Input::hasFile('image8') && Input::hasFile('image9'))
		{
			$fileName1 = $file1->getClientOriginalName();
			$fileName2 = $file2->getClientOriginalName();
			$fileName3 = $file3->getClientOriginalName();
			$fileName4 = $file4->getClientOriginalName();
			$fileName5 = $file5->getClientOriginalName();
			$fileName6 = $file6->getClientOriginalName();
			$fileName7 = $file7->getClientOriginalName();
			$fileName8 = $file8->getClientOriginalName();
			$fileName9 = $file9->getClientOriginalName();
			$path = public_path().'\carousel\\';

			$picture = new Picture($request->all());
			$picture->image1 = $fileName1;
			$picture->image2 = $fileName2;
			$picture->image3 = $fileName3;
			$picture->image4 = $fileName4;
			$picture->image5 = $fileName5;
			$picture->image6 = $fileName6;
			$picture->image7 = $fileName7;
			$picture->image8 = $fileName8;
			$picture->image9 = $fileName9;

			if($file1->move($path,$fileName1) && $file2->move($path,$fileName2) && $file3->move($path,$fileName3) && $file4->move($path,$fileName4)
				&& $file5->move($path,$fileName5) && $file6->move($path,$fileName6) && $file7->move($path,$fileName7) && $file8->move($path,$fileName8) && $file9->move($path,$fileName9))
			{
				$picture->save();
				return redirect()->route('admin.control.index');
			}
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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