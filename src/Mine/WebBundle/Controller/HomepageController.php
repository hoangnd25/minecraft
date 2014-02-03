<?php

namespace Mine\WebBundle\Controller;

use Mine\MinecraftBundle\Service\ServerStatus;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HomepageController extends Controller
{
    /**
     * @Route("/",name="homepage")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
