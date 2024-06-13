<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Clogeo extends BaseController
{
    public function index()
    {
        $datos=[
            "titulo"=> "pagina Code"
        ];
        
        echo view('vistaContenido/body');
        echo view('vistaContenido/footer');
    }
}
