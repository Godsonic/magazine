<?php namespace App\Http\Controllers;

use App\Gallery;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use File;

class galleryController extends Controller {
	
	public function __construct()
	{
		
		$this->middleware('demo', ['only' =>'show']);
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$images = \App\Gallery::all();
		
		return view('gallery.index', compact('images'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//create gallery view
		return view('gallery.gallery');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(GalleryRequest $request)
	{

		//return redirect('galleries'); 
		
		$image = new \App\Gallery;
		
	
		
		$file = $request->file('thumbnail');

		$input = $request->all();
		$fileName = $request->file('thumbnail')->getClientOriginalName();
	
							
		$path = user_photos_path();
				
		$image = Image::make($input['thumbnail']->getRealPath());
		File::exists($path) or File::makeDirectory($path);
				
		$image->save($path.$fileName)->resize(200, null, function ($constraint) {
				$constraint->aspectRatio();
				})->greyscale()->save($path.'tn-'.$fileName);
				
				
		$image->title = $request->input('title');				
		$image->thumbnail = $fileName;
		$image->save();
		
		
		return redirect('galleries');
			
		
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		return view('gallery.subscribe');
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
	
	public function subscribe()
	{
		return view('gallery.subscribe');
	}

}
