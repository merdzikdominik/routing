<?php

class View {

    public string $controller;

    public function __construct() {}

    public function viewPage($pageName) {
        if (file_exists("../routing/views/" . $pageName . ".php")) {
            require_once "../routing/views/" . $pageName . ".php";
        }else {
            die("no such file");
        }
    }

    public function renderProfile(): void {
        echo $this->controller . "'s profile";
    }

    public function renderSettings(): void {
        echo $this->controller . "'s settings";
    }

    public function renderGreetUser(): void {
        echo "Welcome user from " . $this->controller . "<br>";
    }

//    MAIN PAGE

    public function renderCarousel(): void {}

    public function renderOfferBar($text): void {
        echo '<div class="nav-container">' . $text . '</div>';
    }

    //REGISTER PAGE

    public function renderRegistrationForm(): void {}

    public function renderNoPage(): void {
        echo "no page";
    }

}