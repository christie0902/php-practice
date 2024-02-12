<?php
class AudioTrack {
    public ?int $id = null;
    public ?string $title = null;
    public ?Artist $artist = null; //expect object
    public $album = null;
    public $playList = null;
    public int $length = 0;
    public $progress = null;

    public function __construct(int $id) 
    {
        $this->id = $id;
        $this->loadInfo();

    }

    public function setAuthor(int|Author|null $author) //set 2 value types
    {

    }

    public function loadInfo ()

    public function play () : bool //return only bool value
    {}

    public function stop ()
    {}

    public function addFavorite ($user_id)
    {
        //find playlist
        // add song ($this->id)
    }

    public function continuePlay ($progress)
    {

    }

    public function delete ($id)
    {

    }

    public function repeat ($id)
    {

    }

    public function save () : void // not return anything
    {
        // add to database
    }

    public function errorHandle ()
    {
        //error message when not load/can't find song
    }

    public function toJSON ()
    {
        //take public data and represent it as JSON string
        return json_encode([
            'name' => $this->name.
            'artist' => $this->artist
        ])
    }

    public function getLengthInMins ()
    {
        return ($this->length / 60) . : . ($this->length % 60);
    }
}
