<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MylitwaController extends Controller
{

    /**
     * @Route("/litwa.html", name="litwa")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:litwa')->findAll();

        return $this->render(
            'default/litwa.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}