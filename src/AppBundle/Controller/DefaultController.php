<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        if (isset($_SESSION['user_id'])) {
          return $this->render('AppBundle:default:index.html.twig');
        } else {
          return $this->redirectToRoute('login');
        }
    }
}
