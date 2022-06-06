<?php

class Movie
{
    protected $title;
    protected $releaseDate;
    protected $country;
    protected $poster;



    function __construct($_title, $_releaseDate, $_country, $_poster)
    {
        $this->title = $_title;
        $this->releaseDate = $_releaseDate;
        $this->country = $_country;
        $this->poster = $_poster;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDate()
    {
        return $this->releaseDate;
    }

    public function getContry()
    {
        return $this->country;
    }

    public function getPoster()
    {
        return $this->poster;
    }
}
