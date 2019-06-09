<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showArtists()
	{
	    $artists = Artist::all();

		return View::make('artists', compact('artists'));
	}

	public function showAlbums($id)
    {
        $artist = Artist::find($id);
        $albums = $artist->albums;
        return View::make('albums', compact('albums'));
    }

    public function showTracks($id)
    {
        $album = Album::find($id);
        $tracks = $album->tracks;
        $artist = $album->artist;
        return View::make('tracks',compact('tracks'),compact('artist'));
    }

    public function showInfoTrack($id)
    {
        $track = Track::find($id);
        $genre = $track->genre;
        $album = $track->album;
        $artist = $album->artist;
        //echo $artist;
        return View::make('info_tracks',['track'=>$track, 'genre'=>$genre, 'album'=>$album, 'artist'=>$artist]);
    }

}
