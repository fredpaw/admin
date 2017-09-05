<?php

namespace AppBundle\Controller;

use Doctrine\ORM\Query\AST\Functions\CurrentDateFunction;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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

        $user = new User();
        $user->setCreatedDate(new \DateTime('now', new \DateTimeZone('Australia/Sydney')));
        $form = $this->createForm(UserType::class, $user);
        $form->add('submit', SubmitType::class, array('label' => 'Sign In'));

        if($form->isSubmitted() && $form->isValid()) {
            $task = $form->getData();
            session_start();
            $_SESSION['user_id'] = $task->getUserName();
            return $this->redirectToRoute('/');
        }

        return $this->render('AppBundle:User:login.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}
