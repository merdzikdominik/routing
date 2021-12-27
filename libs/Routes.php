<?php

class Routes {
    private string $request;
    private array $params;
    private string $controller;
    private object $controllerObject;

    public function __construct() {

        if (empty($_GET)) {
            $this->controller = "Main";
            $this->params = [];

        }else {
            $this->request = $_GET["url"];
            $this->controller = rtrim($this->request, "/");

            $this->params = explode("/", $this->request);
            $this->controller = $this->params[0];
            $this->controller = ucfirst($this->controller);
        }

        $file = "controllers/" . $this->controller . ".php";

        if (file_exists($file)) {
            require_once $file;
            $this->controllerObject = new $this->controller($this->params);
        }
    }
}