<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormError;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{

    public function changeAction(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $form = $this->createFormBuilder()
            ->add('newPassword', PasswordType::class)
            ->add('confirmPassword', PasswordType::class)
            ->add('save', SubmitType::class, array('label' => 'Change Password'))
            ->getForm();

        $form->handleRequest($request);

        $msg = '';
        if($form->isSubmitted()) {
            $data= $form->getData();
            if(!$data['newPassword']) {
                $form->addError(new FormError('Password can not be empty'));
            } else if($data['newPassword'] != $data['confirmPassword']) {
                $form->addError(new FormError('Password is not match'));
            } else {
                $em = $this->getDoctrine()->getManager();
                $user = $em->getRepository('AppBundle:User')->findOneBy();
                $encoded = $encoder->encodePassword($user, $data['newPassword']);
                $user->setPassword($encoded);
                $em->flush();
                $msg = 'Your Password is updated';
            }
        }
        return $this->render('AppBundle:User:change.html.twig', array(
            'form' => $form->createView(),
            'msg' => $msg
        ));
    }

}
