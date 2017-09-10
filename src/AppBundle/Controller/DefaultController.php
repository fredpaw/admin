<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $session = $request->getSession();
        if(!$session->get('user_id')) {
            return $this->redirectToRoute('login');
        }
        return $this->render('AppBundle:default:index.html.twig');
    }
}
