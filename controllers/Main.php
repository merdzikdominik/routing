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
        $this->$viewOfferBar();

//        echo __DIR__;
    }

    protected function viewCarousel(): void {
        $this->view->viewPage("carousel_view");
    }

    protected function viewOfferBar(): void {
        $this->view->viewPage("offer_bar_view");
    }

}