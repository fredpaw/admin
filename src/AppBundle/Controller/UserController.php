<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormError;

use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle:User:index.html.twig', array(
            // ...
        ));
    }

    public function loginAction(Request $request)
    {
//        if (isset($_SESSION['user_id'])) {
//            return $this->redirectToRoute('/');
//        }

        $user = new User();
        $form = $this->createFormBuilder($user)
            ->add('username', TextType::class)
            ->add('password', PasswordType::class)
            ->add('submit', SubmitType::class, array('label' => 'Sign In'))
            ->getForm();
//        $form->add('cookie', CheckboxType::class, array('label' => 'Remember me', 'mapped' => FALSE));

        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $repo = $em->getRepository('AppBundle:User');
            $admin = $repo->findOneBy(array('username' => $user->getUserName()));
            if(!$admin) {
                $error = new FormError('User not existed, please try it again.');
                $form->addError($error);
                return $this->render('AppBundle:User:login.html.twig', array(
                    'form' => $form->createView()
                ));
            }
            if($admin->getPassword() != $user->getPassword()) {
                $error = new FormError('Wrong password, please try it again.');
                $form->addError($error);
                return $this->render('AppBundle:User:login.html.twig', array(
                    'form' => $form->createView()
                ));
            }
//            session_start();
//            $_SESSION['user_id'] = $admin->getId();
            return $this->redirectToRoute('home');
        }
        return $this->render('AppBundle:User:login.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function logoutAction()
    {
        session_destroy();
        return $this->redirectToRoute('/login');
    }

}
