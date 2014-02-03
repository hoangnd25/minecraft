<?php
namespace Mine\MinecraftBundle\Service;

use Buzz\Browser;

class ServerStatus{

    /** @var  $buzz Browser */
    protected $buzz;

    function __construct($buzz)
    {
        $this->buzz = $buzz;
    }

    public function checkServer($host){
        return json_decode($this->buzz->get('http://minecraft-api.com/v1/get/?server='.$host)->getContent());
    }

    public function getPlayers($host){
        return json_decode($this->buzz->get('http://minecraft-api.com/v1/players/?server='.$host)->getContent());
    }
}