<?php

namespace App\Controller;

use App\Entity\Bateau;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;

class PlanningController extends AbstractController
{
    /**
     * @Rest\View(serializerGroups={"listePlanning"})
     * @Rest\Get("/api/bateaux/{nomunique}/planning",
     *      name ="getplanning"
     * )
     */
    public function getPlanning(Bateau $bateau)
    {
        $planning = $bateau->getPlanning();
        return $planning;
    }

}
