<?php

namespace App\Controller;

use App\Entity\Bateau;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;

class TemoignageController extends AbstractController
{
    /**
     * @Rest\View(serializerGroups={"listeTemoignages"})
     * @Rest\Get ("/api/bateaux/{nomunique}/temoignages", name="gettemoignage")
     */
    public function getTemoignage(Bateau $bateau)
    {
        $temoignage= $bateau->getTemoignages();
        return $temoignage;
    }
}
