<?php

require_once "libs/Controller.php";

class Main extends Controller {

    public function __construct($params) {
        parent::__construct();

        $this->view->controller = "Main";

        $action = "greetUser";

        if (isset($params[1])) $action = $params[1];

        $this->$action();
        echo $_SERVER['PHP_SELF'];
    }

    protected function greetUser(): void {
        $this->view->renderGreetUser();
    }

}