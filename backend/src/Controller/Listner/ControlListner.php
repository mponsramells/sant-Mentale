<?php

namespace App\EventListener;

use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class ControlListener
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public function onKernelRequest(RequestEvent $event)
    {
        $request = $event->getRequest();
        $path = $request->getPathInfo();

        if (preg_match('/^\/content\//', $path)) {
            $user = $this->security->getUser();

            if (!$user || !$this->security->isGranted('ROLE_ADMIN')) {
                $event->setResponse(new JsonResponse(['status' => 'Access denied'], Response::HTTP_FORBIDDEN));
                $event->stopPropagation();
            }
        }
    }
}
