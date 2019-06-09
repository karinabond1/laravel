<?php
class Track extends Eloquent
{
    protected $table ='Track';
    protected $primaryKey ='TrackId';
    public $timestamps = false;

    public function album()
    {
        return $this->belongsTo('Album', 'AlbumId', 'AlbumId');
    }


    public function genre()
    {
        return $this->belongsTo('Genre', 'GenreId', 'GenreId');
    }

    /*public function artist()
    {
        $album = $this->belongsTo('Album', 'AlbumId', 'AlbumId');
        return $album->belongsTo('Artist', 'ArtistId', 'ArtistId');
    }*/
}