<?php

class HomeController extends BaseController {

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showIndex()
	{
		return View::make('index');
	}

	public function postImage()
	{
		$validator = Validator::make(Input::all(), array(
			'name'=>'required|min:3|max:255',
			'description'=>'max:255',
			'image'=>'required|image|mimes:jpeg'
		));
		if($validator->fails())
		{
			return Redirect::back()->withErrors($validator);
		}
		$imgFile = Input::file('image');
		$filename = uniqid('img_').'.jpg';
		$path = Config::get('images.path');
		$imgFile->move($path,$filename);
		$image = new Image;
		$image->name = Input::get('name');
		$image->description = Input::get('description');
		$image->user_id = Auth::id();
		$image->image = $filename;
		$image->save();
		return Redirect::back();
	}

	public function showImage($id)
	{
		$image = Image::find($id);
		if(!$image)
		{
			App::abort(404);
		}
		return View::make('image', compact('image'));
	}

	public function getImageFile($id)
	{
		$image = Image::find($id);
		if(!$image)
		{
			App::abort(404);
		}
		$resp = Response::make(file_get_contents(Config::get('images.path') . '/'.$image->image, 200));
		$resp->header('Content_Type','image/jpeg');
		return $resp;
	}

	public function postComment()
	{
		$imageId = Input::get('image_id');
		$image = Image::find($imageId);
		$text = Input::get('text');
		if(!$image || !$text)
		{
			App::abort(404);
		} 
		$comment = new Comment;
		$comment->image_id = $imageId;
		$comment->user_id = Auth::id();
		$comment->text = $text;
		$comment->save();
		return Redirect::back();

	}
}
