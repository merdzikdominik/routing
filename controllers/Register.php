<?php

require_once "libs/Controller.php";

class Register extends Controller
{
    public function __construct($params) {
        parent::__construct();
        $this->view->controller = "Register";

        $action = "viewRegistrationForm";

        if (isset($params[1])) $action = "noPage";

        $this->$action();

//        print_r($params);
//        echo $_SERVER['PHP_SELF'];
        echo __DIR__;
    }

    protected function viewRegistrationForm(): void {
        $this->view->viewPage("register_view");
    }

    protected function noPage(): void {
        $this->view->renderNoPage();
    }
}