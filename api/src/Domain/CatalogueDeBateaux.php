<?php


namespace App\Domain;

use App\Entity\Bateau;

interface CatalogueDeBateaux
{
    public function tousLesBateaux() : iterable;

}