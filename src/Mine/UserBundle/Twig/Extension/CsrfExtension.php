<?php

namespace Mine\UserBundle\Twig\Extension;

use Symfony\Component\Form\Extension\Csrf\CsrfProvider\DefaultCsrfProvider;

class CsrfExtension extends \Twig_Extension
{
    /**
     * @var $csrfGenerator DefaultCsrfProvider
     */
    private $csrfGenerator;

    public function __construct($csrfGenerator)
    {
        $this->csrfGenerator = $csrfGenerator;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            'csrfAuthenticate' => new \Twig_Function_Method($this, 'csrfAuthenticate')
        );
    }
    public function csrfAuthenticate ()
    {
        return $this->csrfGenerator->generateCsrfToken('authenticate');
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'mine_user_bundle_csrf';
    }
}