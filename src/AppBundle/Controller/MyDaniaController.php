<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyDaniaController extends Controller
{

    /**
     * @Route("/Dania.html", name="Dania")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Dania')->findAll();

        return $this->render(
            'default/Dania.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}