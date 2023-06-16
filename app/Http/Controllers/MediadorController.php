<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facades\App\Services\MediadorService;


class MediadorController extends Controller
{
    function get()
    {
        return MediadorService::getAll();
    }
}
