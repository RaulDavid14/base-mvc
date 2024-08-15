<?php
class Router {
    protected $url = [];
    protected $controller = 'HomeController';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $this->parseUrl();
    }

    public function parseUrl() {
        if (isset($_GET['url']) && !empty($_GET['url'])) {
            $this->url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        } else {
            $this->url = []; // Asegúrate de inicializar $this->url como un array vacío si no hay URL
        }
    }

    public function run() {
        // Controlador
        if (!empty($this->url) && file_exists('app/controllers/' . ucfirst($this->url[0]) . 'Controller.php')) {
            $this->controller = ucfirst($this->url[0]) . 'Controller';
            unset($this->url[0]);
        }

        require_once 'app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Método
        if (isset($this->url[1]) && method_exists($this->controller, $this->url[1])) {
            $this->method = $this->url[1];
            unset($this->url[1]);
        }

        // Parámetros
        $this->params = $this->url ? array_values($this->url) : [];

        // Ejecutar controlador, método y pasar los parámetros
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
}
