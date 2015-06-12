<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyFranceController extends Controller
{

    /**
     * @Route("/France.html", name="France")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:France')->findAll();

        return $this->render(
            'default/France.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
