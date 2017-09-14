<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Page;
use AppBundle\Form\PageType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class PageController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('AppBundle:Page');
        $articles = $repo->findAll();

        return $this->render('AppBundle:Page:index.html.twig', array(
            'articles' => $articles
        ));
    }

    public function newAction(Request $request)
    {
        $article = new Page();
        $form = $this->createForm(PageType::class, $article);
        $form->add('save', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $article = $form->getData();
            $em = $this->getDoctrine()->getManager();

            $user = $em->getRepository('AppBundle:User')->find($request->getSession()->get('user_id'));
            $article->setUser($user);
            $article->setCreateDate(new \DateTime('now', new \DateTimeZone('Australia/Sydney')));
            $em->persist($article);
            $em->flush();

            $articles = $this->getDoctrine()->getRepository(Page::class)->findBy(array('route' => $article->getRoute()), array('id' => 'DESC'));

            $id = $articles[0]->getId();

            return $this->redirectToRoute('edit-article', array('id' => $id));
        }

        return $this->render('AppBundle:Page:edit.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function editAction(Request $request, $id)
    {
        $article = $this->getDoctrine()->getRepository('AppBundle:Page')->find($id);

        $form = $this->createForm(PageType::class, $article);
        $form->add('save', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            //update the article
            $em->flush();
        }

        return $this->render('AppBundle:Page:edit.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('AppBundle:Page')->find($id);
        $em->remove($article);
        $em->flush();

        return $this->redirectToRoute('list-article');
    }

}
