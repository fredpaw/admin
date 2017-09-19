<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Page;

class SendController extends FOSRestController
{
    public function sendAction($id)
    {
        $repo = $this->getDoctrine()->getRepository(Page::class);

        $query = $repo->createQueryBuilder('s')
            ->select('s.id, s.title, s.route, s.content')->where('s.id = :id')->setParameter('id', $id)->getQuery();

        $singleresult = $query->getSingleResult();
        if ($singleresult === null) {
            return new View("user not found", Response::HTTP_NOT_FOUND);
        }
        return $singleresult;
    }

    public function sendAllAction()
    {
        $repo = $this->getDoctrine()->getRepository(Page::class);

        $query = $repo->createQueryBuilder('s')->select('s.id, s.title, s.route, s.content')->getQuery();

        $restresult = $query->getResult();
        if ($restresult === null) {
            return new View("there are no content exist", Response::HTTP_NOT_FOUND);
        }
        return $restresult;
    }
}