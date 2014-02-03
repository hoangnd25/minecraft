<?php

namespace Mine\UserBundle\EventListener;

use FOS\UserBundle\FOSUserEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use FOS\UserBundle\Event\UserEvent;

class UserIPListener implements EventSubscriberInterface {

    public function __construct() {
    }

    public static function getSubscribedEvents() {
        $listeners = array();
        $listeners[FOSUserEvents::REGISTRATION_INITIALIZE] = 'saveIP';
        return $listeners;
    }

    public function saveIP(UserEvent $event) {
        $event->getUser()->setIp($event->getRequest()->getClientIp());
    }
}