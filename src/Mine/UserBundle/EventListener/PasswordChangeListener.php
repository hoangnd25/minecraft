<?php

namespace Mine\UserBundle\EventListener;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\Session\Session;

class PasswordChangeListener implements EventSubscriberInterface {
    private $router;
    private $session;

    public function __construct(UrlGeneratorInterface $router, Session $session) {
        $this->router = $router;
        $this->session = $session;

    }

    public static function getSubscribedEvents() {
        return [
            FOSUserEvents::CHANGE_PASSWORD_SUCCESS => 'onPasswordChangeSuccess',
            FOSUserEvents::RESETTING_RESET_SUCCESS => 'onPasswordChangeSuccess',
        ];
    }

    public function onPasswordChangeSuccess(FormEvent $event) {
        $url = $this->router->generate('homepage');
        $event->setResponse(new RedirectResponse($url));
    }
}