<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyGermanyController extends Controller
{

    /**
     * @Route("/germany.html", name="germany")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Germany')->findAll();

        return $this->render(
            'default/germany.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
