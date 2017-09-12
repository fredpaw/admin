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

        $repository = $this->getDoctrine()->getRepository('AppBundle:Page');
        $query = $this->getEntityManager();

        $U_total = $query->getResult();
        return $this->render('AppBundle:default:index.html.twig', array(
            'U_total' => $U_total
        ));
    }
}
