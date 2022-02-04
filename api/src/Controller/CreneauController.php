<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\CreneauRepository;
use App\Entity\Bateau;
use App\Entity\Planning;
use App\Entity\Creneau;

class CreneauController extends AbstractController
{
    /**
     * @Rest\View(serializerGroups={"getCreneau"})
     * @Rest\Get("/api/bateaux/{nomunique}/planning/creneau/{id}",
     *      name ="getcreneau"
     * )
     */
    public function getCreneau(Bateau $bateau,
                               Planning $planning, Creneau $creneau)
    {
        //Récupération du planning de bateau
        $bateau->getPlanning();

        //Récupération du creneau dans le planning du bateau
        $planning->getCreneau();

        return $creneau;
    }

    /**
     * @Rest\View(serializerGroups={"getCreneau"})
     * @Rest\Patch("/api/bateaux/{nomunique}/planning/creneau/{id}",
     *      name ="updateCreneauNbPlace"
     * )
     */
    public function updateCreneauNbPlace(Request $request, Bateau $bateau,
                                         Planning $planning, CreneauRepository $repository)
    {
        //Récupération du planning de bateau
        $bateau->getPlanning();

        //Récupération du creneau dans le planning du bateau
        $planning->getCreneau();

        $creneau = $repository->findOneBy(array('id' => $request->get('id')));

        $data = json_decode($request->getContent(), true);

        empty($data['nbPlaceRestante']) ? true : $creneau->setNbPlaceRestante($data['nbPlaceRestante']);

        $creneauUpdated = $repository->updateCreneau($creneau);

        return new JsonResponse($creneauUpdated, Response::HTTP_OK, []);

    }
}
