<?php

namespace App\Domain\Query;

use App\Domain\CatalogueDeBateaux;

class ListeBateauxHandler
{
    private $catalogueDeBateaux;

    public function __construct(CatalogueDeBateaux $catalogueDeBateaux)
    {
        $this->catalogueDeBateaux = $catalogueDeBateaux;
    }

    public function handle(ListeBateauxQuery $query)
    {
        return $this->catalogueDeBateaux->tousLesBateaux();
    }
}