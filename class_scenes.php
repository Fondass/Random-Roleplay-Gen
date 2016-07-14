<?php

class Scene
{
    var $scene;
    
    function __construct($scene)
    {
        $this->scene = $scene;
    }
    
    public function getScenes()
    {
        return $this->scene;
    }
    
}