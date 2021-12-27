<?php

require_once "libs/Controller.php";

class User extends Controller{

    public function __construct($params) {
        parent::__construct();
        $this->view->controller = "User";

        $action = "profile";

        if (isset($params[1])) {
            $action = $params[1];
        }

        $this->$action();

    }

    protected function settings(): void {
        $this->view->renderSettings();
    }

    protected function profile(): void {
        $this->view->renderProfile();
    }
}

