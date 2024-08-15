<?php
$ruta = str_replace('\\', '/', dirname(__FILE__,3));
require_once $ruta."/config/config.php";

require_once $ruta . '/core/Controller.php';

class HomeController extends Controller {
    public function index() {
        $this->view('home/index');
    }

    public function about() {
        $this->view('home/about');
    }
}
