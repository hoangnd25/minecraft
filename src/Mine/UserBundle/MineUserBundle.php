<?php

namespace Mine\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MineUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }

}
