<?php

class HelloController extends BaseController
{
	public function showHello()
	{
		$name = Input::old('name');
		$list = array(
			'About'=>'/about',
			'Contact'=>'/contact',
			'Terms of Conditions'=>'/toc'
		);
		return View::make('hello2', array('name'=>$name, 'urls'=>$list));
	}

	public function showForm()
	{
		return View::make('form');
	}

	public function postSubmit()
	{		
		if(Input::has('name')){
			return Redirect::action('HelloController@showHello')->withInput();
		}
		return Redirect::route('form');
		//return View::make('form');
		
	}

	public function dbTest($id)
	{
		//*****mysql******
		//$user = DB::table('users')->where('id','=',[$id])->select('email')->get();
		//$user1 = DB::table('users')->where('name','like','%r%')->lists('email');

		/*$user = DB::table('users')->get();
		var_dump($user);
		$user1 = DB::table('users')->where('name', 'Derek')->orWhere(function($query){
			$query->where('name','Kate')->where('id',2);
		})->get();
		var_dump($user1);*/
		/*if(DB::table('users')->where('name','leo')->count()){
			$user1 = DB::table('users')->where('name','leo')->take(1)->delete();
		}else{
			echo 'goodbye';
		}*/
		
		//$user1 = DB::table('users')->insert(['name'=>'selena','email'=>'selenos@gmail.com']);
		//echo $user1;
		//return View::make('dbtest');



		//*********sqlite******

		//$track = Track::find($id);
		//$track = Track::where('Name', 'LIKE', '%sh%')->get();


		//$tracks = Track::where('Milliseconds', '>', 5*60*1000)->get();
		//$tracks = Track::all();
		//$tracks = Track::take(10)->get();
		//$tracks = Track::skip(100)->take(10)->get();
		//var_dump($tracks);

		//$tracks = Artist::all();
		//$tracks = Album::all();

		$artist = Artist::find($id);
		var_dump($artist->tracks);
		$albums = $artist->albums;
		foreach($albums as $album){
			echo $artist->Name." - ".$album->Title . '( '. $album->artist->Name . ' )';
			echo '<br/>';
			$tracks = $album->tracks;
			foreach($tracks as $track){
				echo ' - '.$track->Name . ' ('.$track->album->Title . ')';
				echo '<br/>';
			}
		}

		//$track = Track::find($id)
		//return View::make('songList', compact('tracks'));

	}
}
