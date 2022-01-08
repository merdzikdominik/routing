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

//    MAIN PAGE

    public function renderCarousel(): void {
        echo '<div id="carouselExampleCaptions" class="carousel slide bg-black height" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/routing/images/image1.png" class="d-block w-100" alt="image1">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/routing/images/image2.png" class="d-block w-100" alt="image2">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/routing/images/image3.png" class="d-block w-100" alt="image3">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>';
    }

    public function renderOfferBar($text): void {
        echo '<div class="nav-container">' . $text . '</div>';
    }

    //REGISTER PAGE

    public function renderRegistrationForm(): void {
        echo '<section class="h-100 h-custom" style="background-color: #8fc4b7;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
                <div class="card rounded-3">
                    <img src="https://www.goodfreephotos.com/albums/united-states/hawaii/other-hawaii/wide-angle-forest-landscape-of-oahu-in-hawaii.jpg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

                        <form class="px-md-2" action="helpers/registerValidation.php" method="post">

                            <div class="form-outline mb-4">
                                <input type="text" id="form3Example1q" class="form-control" name="name"/>
                                <label class="form-label" for="form3Example1q">Name</label>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">

                                    <div class="form-outline datepicker">
                                        <input type="text" class="form-control" id="exampleDatepicker1"/>
                                        <label for="exampleDatepicker1" class="form-label">Select a date</label>
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4">

                                    <select class="select">
                                        <option value="1" disabled>Gender</option>
                                        <option value="2">Female</option>
                                        <option value="3">Male</option>
                                        <option value="4">Other</option>
                                    </select>

                                </div>
                            </div>

                            <div class="mb-4">

                                <select class="select">
                                    <option value="1" disabled>Class</option>
                                    <option value="2">Class 1</option>
                                    <option value="3">Class 2</option>
                                    <option value="4">Class 3</option>
                                </select>

                            </div>

                            <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                                <div class="col-md-6">

                                    <div class="form-outline">
                                        <input type="text" id="form3Example1w" class="form-control" />
                                        <label class="form-label" for="form3Example1w">Registration code</label>
                                    </div>

                                </div>
                            </div>

                            <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>';
    }

    public function renderNoPage(): void {
        echo "no page";
    }

}