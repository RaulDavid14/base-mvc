<?php

require_once ROOT_PATH.'/includes/controller.php';

class HomeController extends Controller
{

    public function index()
    {
        $titulo = 'Bienvenidos';
        $this->load_view('/home');
    }

}