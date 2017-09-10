<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Page;
use AppBundle\Form\PageType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle:Page:index.html.twig', array(
            // ...
        ));
    }

    public function newAction(Request $request)
    {
        if(!$request->getSession()->get('user_id')){
            return $this->redirectToRoute('login');
        }

        $article = new Page();

        $form = $this->createForm(PageType::class, $article);
        $form->add('submit', SubmitType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $page = $form->getData();
        } else {
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('AppBundle:User')->find($request->getSession()->get('user_id'));
            $article->setUser($user);
            $article->setCreateDate(new \DateTime('now', new \DateTimeZone('Australia/Sydney')));
        }

        return $this->render('AppBundle:Page:new.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function editAction()
    {
        return $this->render('AppBundle:Page:edit.html.twig', array(
            // ...
        ));
    }

    public function deleteAction()
    {
        return $this->render('AppBundle:Page:delete.html.twig', array(
            // ...
        ));
    }

}
