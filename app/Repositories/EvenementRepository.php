<?php

namespace App\Repositories;

use App\Evenement;

class EvenementRepository extends ResourceRepository
{
    public function __construct(Evenement $evenement)
    {
        $this->model = $evenement;
    }
}