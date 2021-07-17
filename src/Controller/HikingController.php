<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Hike;
use App\Repository\HikeRepository;
use Doctrine\ORM\EntityManagerInterface;

class HikingController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function show(HikeRepository $hikeRepository): Response
    {
        $hikes = $hikeRepository
        ->findAll();
        if (!$hikes) {
            throw $this->createNotFoundException(
                "Pas de randonnée pour l'instant "
            );
        }
        return $this->render('hiking/show.html.twig', ['hikes' => $hikes]);
    }
    /**
     * @Route("/detail/{id}",name="hike_detail")
     */
    public function show_hike(int $id,HikeRepository $hikeRepository): Response
    {
        $hike_id = $hikeRepository
        ->find($id);

        if (!$hike_id) {
            throw $this->createNotFoundException(
                "pas de randonnée pour l'id ".$id
            );
        }

        return $this->render('hiking/show.html.twig', ['hikes' => $hike_id]);
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
        $hike->setPic('img/rando.jpeg');
        $hike->setNpoint("lat 45.634749 lon 5.981805"
    );

        $entityManager->persist($hike);

        $entityManager->flush();

        return new Response('La rando '.$hike->getTitle().' est créée');

    }
}