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

    public function editAction(Request $request, $id)
    {
        if(!$request->getSession()->get('user_id')){
            return $this->redirectToRoute('login');
        }

        if(!$id) {
            $article = new Page();
        } else {
            $article = $this->getDoctrine()->getRepository('AppBundle/Page')->find($id);
        }


        $form = $this->createForm(PageType::class, $article);
        $form->add('save', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $page = $form->getData();
            $em = $this->getDoctrine()->getManager();

            if(!$id) {
                $user = $em->getRepository('AppBundle:User')->find($request->getSession()->get('user_id'));
                $page->setUser($user);
                $page->setCreateDate(new \DateTime('now', new \DateTimeZone('Australia/Sydney')));
                $em->persist($page);
                $em->flush();
                $article = $this->getDoctrine()->getRepository('AppBundle/Page')->findOneBy(array('id' => 'DESC'));
                $id = $article->getId();
                return $this->redirectToRoute($this->generateUrl(
                    'edit-article',
                    array('id' => $id)
                ));
            } else {
                //update the article
            }

        }

        return $this->render('AppBundle:Page:edit.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function deleteAction()
    {
        return $this->render('AppBundle:Page:delete.html.twig', array(
            // ...
        ));
    }

}
