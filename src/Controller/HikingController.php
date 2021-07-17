<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HikingController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function getHiking()
    {
        $hiking = [
            "je suis une randonnée 1",
            "je suis une randonnée 2",
            "je suis une randonnée 3",
        ];
        return $this->render('hiking/show.html.twig', ['hiking' => $hiking]);
    }

}