<?php

namespace App\Services;

use App\Models\Mediador;

class MediadorService
{
    function getAll()
    {
       $mediador = Mediador::All();
       return $mediador;
    }
}