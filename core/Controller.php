<?php
$ruta = str_replace('\\', '/', dirname(__FILE__,2));
require_once $ruta."/config/config.php";


class Controller {
    public function view($view, $data = []) {
        require_once PATH.'/app/views/' . $view . '.php';
    }

    public function model($model) {
        require_once PATH.'/app/models/' . $model . '.php';
        return new $model();
    }
}
$controller = new Controller();
