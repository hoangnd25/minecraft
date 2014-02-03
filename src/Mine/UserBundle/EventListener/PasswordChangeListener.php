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
        $listeners = array();
        $listeners[FOSUserEvents::CHANGE_PASSWORD_SUCCESS] = 'onPasswordChangeSuccess';
        $listeners[FOSUserEvents::RESETTING_RESET_SUCCESS] = 'onPasswordChangeSuccess';
        $listeners[FOSUserEvents::REGISTRATION_SUCCESS] = 'onPasswordChangeSuccess';
        return $listeners;
    }

    public function onPasswordChangeSuccess(FormEvent $event) {

        $this->session->getFlashBag()->add('info','The game server may take up to 5 mins to update your account. Sorry for the inconvenience');
        if(FOSUserEvents::REGISTRATION_SUCCESS == $event->getName()){
            $this->session->getFlashBag()->add('info','An email is sent to your email contains a link to activate your account');
        }
        $url = $this->router->generate('homepage');
        $event->setResponse(new RedirectResponse($url));
    }
}