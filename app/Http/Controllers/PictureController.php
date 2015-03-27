<?php namespace App\Http\Controllers;

use File;
use Auth;
use App\Picture;
use Intervention\Image\Facades\Image;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PictureRequest;
use Illuminate\Http\Request;

class PictureController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$id = Auth::user()->id;
		return view('picture.picture', compact('id'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(PictureRequest $request)
	{
		$user = Auth::user()->id;
		
		$image = new Picture;
		
		$image->user_id = $user;
		

		
		$file = $request->file('thumbnail');

		$input = $request->all();
		$fileName = $request->file('thumbnail')->getClientOriginalName();
	
							
		$path = user_photos_path();
				
		$image = Image::make($input['thumbnail']->getRealPath());
		File::exists($path) or File::makeDirectory($path);
				
		$image->save($path.$fileName)->resize(200, null, function ($constraint) {
				$constraint->aspectRatio();
				})->greyscale()->save($path.'tn-'.$fileName);
				
		$image->filename = $fileName;
		$image->thumbnail = 'tn-'.$fileName;		
		$image->title = $request->input('title');				
		
		$image->save();
		
		
		return redirect('galleries');
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
