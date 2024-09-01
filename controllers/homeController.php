<?php

class HomeController
{

    public function load_view()
    {
        $titulo = 'Biendenidos';
        require_once './views/home/index.php';
    }

}
