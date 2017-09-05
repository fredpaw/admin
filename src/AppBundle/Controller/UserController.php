<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;

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
            $user = new User();
            $form = $this->createForm(UserType::class, $user);
            return $this->render('AppBundle:User:login.html.twig', array(
                'form' => $form->createView(),
            ));
        }

        session_start();
//        $_SESSION['user_id'] = ;
        return $this->redirectToRoute('/');
    }

}
