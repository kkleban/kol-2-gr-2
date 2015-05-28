<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyBelgiumController extends Controller
{

    /**
     * @Route("/Belgium.html", name="Belgium")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Belgium')->findAll();

        return $this->render(
            'default/Belgium.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
