<?php

namespace Mine\MinecraftBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ServerWidgetController extends Controller
{
    /**
     * @Route("/ajax/widget/server-status", name="widget.server_status.ajax")
     * @Template()
     */
    public function statusAction()
    {
        $serverStatus = $this->get('server.status');
        return array(
            'server' => $serverStatus->checkServer('mineclgt.com')
        );
    }
}
