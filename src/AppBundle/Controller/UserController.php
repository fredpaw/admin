<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle:User:index.html.twig', array(
            // ...
        ));
    }

    public function loginAction()
    {
        if (isset($_SESSION['user_id'])) {
            return $this->redirectToRoute('/');
        }

        if (!isset($_POST['username'])) {
            return $this->render('AppBundle:User:login.html.twig');
        }

        session_start();
//        $_SESSION['user_id'] = ;
        return $this->redirectToRoute('/');
    }

}
