<?php

class View {

    public string $controller;

    public function __construct() {}

    public function renderProfile(): void {
        echo $this->controller . "'s profile";
    }

    public function renderSettings(): void {
        echo $this->controller . "'s settings";
    }

    public function renderGreetUser(): void {
        echo "Welcome user from " . $this->controller . "<br>";
    }
}