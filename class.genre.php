<?php


class Fantasy
{
    
    public function __construct($char)
    {
        $this->char = $char;   
    }
    
    public function getFantasyResult()
    {
        return $this->char;
    }
    
    
    
}

class Scifi
{
    
    public function __construct($char)
    {
        $this->char = $char;
    }
    
    public function getScifiResult()
    {
        return $this->char;
    }
    
}


class Internetculture
{
    public function __construct($char)
    {
        $this->char = $char;
    }
    
    public function getInternetcultureResult()
    {
        return $this->char;
    }
}

class Steampunk
{
    public function __construct($char)
    {
        $this->char = $char;
    }
    
    public function getSteampunkResult()
    {
        return $this->char;
    }
    
}

class Videogameculture
{
    public function __construct($char)
    {
        $this->char = $char;
    }
    
    public function getVideogameCultureResult()
    {
        return $this->char;
    }
}

class Nerds
{
    public function __construct($char)
    {
        $this->char = $char;
    }
    
    public function getNerdsResult()
    {
        return $this->char;
    }
}

class History
{
    public function __construct($char)
    {
        $this->char = $char;
    }
    
    public function getHistoryResult()
    {
        return $this->char;
    }
}