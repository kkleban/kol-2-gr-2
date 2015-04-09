<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyHungaryController extends Controller
{

    /**
     * @Route("/hungary.html", name="hungary")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Hungary')->findAll();

        return $this->render(
            'default/hungary.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
