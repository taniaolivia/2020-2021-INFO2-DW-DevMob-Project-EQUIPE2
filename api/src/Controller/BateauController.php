<?php

namespace App\Controller;


use App\Repository\BateauRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\Serializer\SerializerInterface;
use App\Entity\Bateau;
use App\Domain\Query\ListeBateauxHandler;
use App\Domain\Query\ListeBateauxQuery;

class BateauController extends AbstractController
{
    /**
     * @Rest\View(serializerGroups={"listeBateaux"})
     * @Rest\Get("/api/bateaux",
     *     name="listebateaux"
     * )
     */
    public function listeBateaux(ListeBateauxHandler $handler)
    {
        $query = new ListeBateauxQuery();
        $bateaux = $handler->handle($query);
        return $bateaux;
    }

    /**
     * @Rest\View(serializerGroups={"listeBateaux"})
     * @Rest\Get("/api/bateaux/{nomunique}",
     *      name ="getbateau"
     * )
     */
    public function getBateau(Bateau $bateau)
    {
        return $bateau;  
    } 

}
