<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Hike;
use Doctrine\ORM\EntityManagerInterface;

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

    /**
     * @Route("/hike", name="create_hike")
     */
    public function createHike(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $hike = new Hike();
        $hike->setTitle('la balade');
        $hike->setDuration(120);
        $hike->setDistance(10);
        $hike->setHight(300);
        $hike->setHighest('400');
        $hike->setLowest(100);
        $hike->setDifficulty('dificile');
        $hike->setTo_start(true);
        $hike->setType('Apied');
        $hike->setArea('Rhone-Alpes');
        $hike->setTown('Crémieux');
        $hike->setStart('N 45.651496° / E 6.095139°');
        $hike->setDescription("Au départ de l'Étang des Filatures remontez jusqu'au village de Saint-Vincent-de-Reins en passant par les Fouilloux, le Jovin et retour à l'étang par l'impasse de la Bruchevalière, et la Tuilière...");
        $hike->setPic('public/img/rando.jpeg');
        $hike->setNpoint("lat 45.634749 lon 5.981805");

        $entityManager->persist($hike);

        $entityManager->flush();

        return new Response('La rando '.$hike->getTitle().' est créée');

    }
}