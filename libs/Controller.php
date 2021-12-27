<?php

require_once "View.php";

class Controller {

    protected object $view;

    public function __construct() {
        $this->view = new View();
    }
}