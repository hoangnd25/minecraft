<?php

namespace Mine\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class WorldMapController extends Controller
{
    /**
     * @Route("/world-map",name="world_map")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
