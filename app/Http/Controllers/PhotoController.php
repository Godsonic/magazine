<?php namespace App\Http\Controllers;

use App\Photo;
use App\User;
use File;
use Auth;
use App\Http\Requests;
use App\Http\Requests\PhotoRequest;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

use Illuminate\Http\Request;

class PhotoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
			$id = Auth::user()->id;
					
			$images = User::findOrFail($id)->photos()->get();
		
		
		return view('photos.index', compact('images'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('gallery.gallery');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(PhotoRequest $request)
	{
		$photo = new Photo;
		
	
		
		$file = $request->file('thumbnail');

		$input = $request->all();
		$fileName = $request->file('thumbnail')->getClientOriginalName();
	
							
		$path = user_photos_path();
				
		$image = Image::make($input['thumbnail']->getRealPath());
		File::exists($path) or File::makeDirectory($path);
				
		$image->save($path.$fileName)->resize(200, null, function ($constraint) {
				$constraint->aspectRatio();
				})->greyscale()->save($path.'tn-'.$fileName);

		
		$photo->user_id = Auth::user()->id;
		$photo->fileName = $fileName;
		$photo->thumbnail = 'tn-'.$fileName;
		$photo->title = $request->input('title');

		$photo->save();
				
		return redirect('photo');
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//$user = Auth::user()->id;
		$image = Photo::findOrFail($id);
		
		return view('photos.show', compact('image'));
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
