<?php

require_once "libs/Controller.php";

class Main extends Controller {

    public function __construct($params) {
        parent::__construct();

        $this->view->controller = "Main";

        $viewCarousel = "viewCarousel";
        $viewOfferBar = "viewOfferBar";

        if (isset($params[1])) $action = $params[1];

        $this->$viewCarousel();
        $this->$viewOfferBar("Zobacz naszą oferte!");

//        echo __DIR__;
    }

//    protected function greetUser(): void {
//        $this->view->renderGreetUser();
//    }

    protected function viewCarousel(): void {
        $this->view->renderCarousel();
    }

    protected function viewOfferBar($text): void {
        $this->view->renderOfferBar($text);
    }

}