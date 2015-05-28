<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyPolandController extends Controller
{

    /**
     * @Route("/poland.html", name="poland")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Poland')->findAll();

        return $this->render(
            'default/poland.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}