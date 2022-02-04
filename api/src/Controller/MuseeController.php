<?php

namespace App\Controller;


use App\Entity\Musee;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations AS Rest;
use FOS\RestBundle\View\View;
use App\Repository\MuseeRepository;

class MuseeController extends AbstractController
{
    /**
     * @Rest\View()
     * @Rest\Get("/api/musee/{id}",
     *          name="getmusee")
     */
    public function getMusee(Musee $musee)
    {
        return $this->json([
            'musee' => $musee,
        ]);
    }


}
