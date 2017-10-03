<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Page;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $repository_T = $this->getDoctrine()->getRepository(Page::class);

        $repository_U = $this->getDoctrine()->getRepository(User::class);

        $qdt = $repository_T->createQueryBuilder('a')->select('Count(a)')->getQuery();

        $qdu = $repository_U->createQueryBuilder('n')->select('Count(n)')->getQuery();

        $T_total = $qdt->getOneOrNullResult();

        $U_total = $qdu->getOneOrNullResult();

        return $this->render('AppBundle:default:index.html.twig', array(
            'T_total' => $T_total,
            'U_total' => $U_total
        ));
    }
}