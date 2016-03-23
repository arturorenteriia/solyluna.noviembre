<?php namespace solyluna\Http\Controllers\Images;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use solyluna\Http\Requests;
use solyluna\Http\Controllers\Controller;

use Illuminate\Http\Request;
use solyluna\Http\Requests\CreateImagesRequest;
use solyluna\Picture;
use solyluna\User;

class ImagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
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
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateImagesRequest $request)
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
			$path = base_path('../public_html/carousel');

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
				return redirect()->route('admin.properties.show');
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
		$property_id = $id;
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		$count = Picture::select('id', 'property_id')
			->where('property_id', '=', $property_id)
			->count();
		$images = Picture::select('id', 'property_id')
			->where('property_id', '=', $property_id)
			->get();
		if($count>0)
		{
			return view('admin.properties.images.show', compact('user_role','images'));
		}
		return view('admin.properties.images.index', compact('user_role', 'property_id'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$edit = Picture::findOrFail($id);
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		return view('admin.properties.images.edit', compact('edit', 'user_role'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$picture = Picture::findOrFail($id);
		$file1 = Input::file('image1');
		$file2 = Input::file('image2');
		$file3 = Input::file('image3');
		$file4 = Input::file('image4');
		$file5 = Input::file('image5');
		$file6 = Input::file('image6');
		$file7 = Input::file('image7');
		$file8 = Input::file('image8');
		$file9 = Input::file('image9');

		if(Input::hasFile('image1'))
		{
			$fileName1 = $file1->getClientOriginalName();
			$path = base_path('../public_html/carousel');
			if($file1->move($path,$fileName1))
			{
				$picture->image1 = $fileName1;
				$picture->save();
				Session::flash('message', "Se ha mdificado el carrusel correctamente correctamente");
			}
		}
		if(Input::hasFile('image2'))
		{
			$fileName2 = $file2->getClientOriginalName();
			$path = base_path('../public_html/carousel');
			if($file2->move($path,$fileName2))
			{
				$picture->image2 = $fileName2;
				$picture->save();
				Session::flash('message', "Se ha mdificado el carrusel correctamente correctamente");
			}
		}
		if(Input::hasFile('image3'))
		{
			$fileName3 = $file3->getClientOriginalName();
			$path = base_path('../public_html/carousel');
			if($file3->move($path,$fileName3))
			{
				$picture->image3 = $fileName3;
				$picture->save();
				Session::flash('message', "Se ha mdificado el carrusel correctamente correctamente");
			}
		}
		if(Input::hasFile('image4'))
		{
			$fileName4 = $file4->getClientOriginalName();
			$path = base_path('../public_html/carousel');
			if($file4->move($path,$fileName4))
			{
				$picture->image4 = $fileName4;
				$picture->save();
				Session::flash('message', "Se ha mdificado el carrusel correctamente correctamente");
			}
		}
		if(Input::hasFile('image5'))
		{
			$fileName5 = $file5->getClientOriginalName();
			$path = base_path('../public_html/carousel');
			if($file5->move($path,$fileName5))
			{
				$picture->image5 = $fileName5;
				$picture->save();
				Session::flash('message', "Se ha mdificado el carrusel correctamente correctamente");
			}
		}
		if(Input::hasFile('image6'))
		{
			$fileName6 = $file6->getClientOriginalName();
			$path = base_path('../public_html/carousel');
			if($file6->move($path,$fileName6))
			{
				$picture->image6 = $fileName6;
				$picture->save();
				Session::flash('message', "Se ha mdificado el carrusel correctamente correctamente");
			}
		}
		if(Input::hasFile('image7'))
		{
			$fileName7 = $file7->getClientOriginalName();
			$path = base_path('../public_html/carousel');
			if($file7->move($path,$fileName7))
			{
				$picture->image7 = $fileName7;
				$picture->save();
				Session::flash('message', "Se ha mdificado el carrusel correctamente correctamente");
			}
		}
		if(Input::hasFile('image8'))
		{
			$fileName8 = $file8->getClientOriginalName();
			$path = base_path('../public_html/carousel');
			if($file8->move($path,$fileName8))
			{
				$picture->image8 = $fileName8;
				$picture->save();
				Session::flash('message', "Se ha mdificado el carrusel correctamente correctamente");
			}
		}
		if(Input::hasFile('image9'))
		{
			$fileName9 = $file9->getClientOriginalName();
			$path = base_path('../public_html/carousel');
			if($file9->move($path,$fileName9))
			{
				$picture->image9 = $fileName9;
				$picture->save();
				Session::flash('message', "Se ha mdificado el carrusel correctamente correctamente");
			}
		}
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		return redirect()->route('admin.properties.show', compact('user_role'));
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