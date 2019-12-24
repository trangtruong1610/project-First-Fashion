<!doctype html>
<html lang="en">
<head>
    <title>Homepage</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Local Source -->
    <script src="scripts/scripts.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid" style="min-height: max-content">
<!--Banner-->
    <div id="carouselId" class="carousel slide" data-ride="carousel" style="height: 350px; background-color: yellow">
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
            <li data-target="#carouselId" data-slide-to="2"></li>
        </ol>
    <!--Carousel content-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide">
            </div>
            <div class="carousel-item">
                <img data-src="holder.js/900x500/auto/#666:#444/text:Second slide" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img data-src="holder.js/900x500/auto/#666:#444/text:Third slide" alt="Third slide">
            </div>
        </div>
    <!--Carousel control-->
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <div class="icon-bg">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </div>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <div class="icon-bg">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </div>
            <span class="sr-only">Next</span>
        </a>
    </div>
<!--Customer Categories-->
    <div id="categories">
        <div class="debug row cus-target">
            <div class="col-md-4 debug cus-target-bg" style="background-image: url('images/Cus-category-men.jpg')">
                <div class="filter">
                    <a href="">
                        <span class="cus-target">FOR MEN</span>
                    </a>
                </div>
            </div>
            <div class="col-md-4 debug cus-target-bg" style="background-image: url('images/Cus-category-women.jpg')">
                <div class="filter">
                    <a href="">
                        <span class="cus-target">FOR WOMEN</span>
                    </a>
                </div>
            </div>
            <div class="col-md-4 debug cus-target-bg" style="background-image: url('images/Cus-category-children.jpg')">
                <div class="filter">
                    <a href="">
                        <span class="cus-target">FOR CHILDREN</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
<!--Top Brands-->
    <div id="brands">
        <div class="debug" style="margin-top: 20px">
            <div class="header debug">
                <div class="homepage-header"><img src="images/left-lines.png"></div>
                <span>TOP BRANDS</span>
                <div class="homepage-header"><img src="images/right-lines.png"></div>
            </div>
            <div class="con-box debug row">
                <button class="col-md-2 box debug"><img src="images/1280px-Burberry_Logo.svg.png"></button>
                <button class="col-md-2 box debug"><img src="images/1280px-Calvin_klein_logo.svg.png"></button>
                <button class="col-md-2 box debug"><img src="images/Cartier_logo.svg"></button>
                <button class="col-md-2 box debug"><img src="images/1280px-Chanel_logo.svg.png"></button>
                <button class="col-md-2 box debug"><img src="images/1280px-Louis_Vuitton_logo.svg.png"></button>
                <button class="col-md-2 box debug"><img src="images/1280px-Chanel_logo.svg.png"></button>
                <button class="col-md-2 box debug"><img src="images/Cartier_logo.svg"></button>
                <button class="col-md-2 box debug"><img src="images/1280px-Louis_Vuitton_logo.svg.png"></button>
                <button class="col-md-2 box debug"><img src="images/1280px-Calvin_klein_logo.svg.png"></button>
                <button class="col-md-2 box debug"><img src="images/1280px-Prada-Logo.svg.png"></button>
            </div>
        </div>
    </div>
<!--Trending-->
    <div id="trending">
        <div class="debug" style="margin-top: 20px">
            <div class="header debug">
                <div class="homepage-header"><img src="images/left-lines.png"></div>
                <span>TRENDING</span>
                <div class="homepage-header"><img src="images/right-lines.png"></div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="d-none d-lg-block">
                                <div class="slide-box">
                                    <img src="images/Cus-category-men.jpg" alt="First slide">
                                    <img src="images/Cus-category-women.jpg" alt="First slide">
                                    <img src="images/Cus-category-children.jpg" alt="First slide">
                                    <img src="images/Cus-category-women.jpg" alt="First slide">
                                </div>
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <div class="slide-box">
                                    <img src="images/Cus-category-men.jpg" alt="First slide">
                                    <img src="images/Cus-category-women.jpg" alt="First slide">
                                    <img src="images/Cus-category-children.jpg" alt="First slide">
                                </div>
                            </div>
                            <div class="d-none d-sm-block d-md-none">
                                <div class="slide-box">
                                    <img src="images/Cus-category-men.jpg" alt="First slide">
                                    <img src="images/Cus-category-women.jpg" alt="First slide">
                                </div>
                            </div>
                            <div class="d-block d-sm-none">
                                <img class="d-block w-100" src="https://picsum.photos/600/400/?image=0&random" alt="First slide">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-none d-lg-block">
                                <div class="slide-box">
                                    <img src="images/Cus-category-children.jpg" alt="Second slide">
                                    <img src="images/Cus-category-men.jpg" alt="Second slide">
                                    <img src="images/Cus-category-women.jpg" alt="Second slide">
                                    <img src="images/Cus-category-children.jpg" alt="Second slide">
                                </div>
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <div class="slide-box">
                                    <img src="images/Cus-category-children.jpg" alt="Second slide">
                                    <img src="images/Cus-category-men.jpg" alt="Second slide">
                                    <img src="images/Cus-category-women.jpg" alt="Second slide">
                                </div>
                            </div>
                            <div class="d-none d-sm-block d-md-none">
                                <div class="slide-box">
                                    <img src="images/Cus-category-children.jpg" alt="Second slide">
                                    <img src="images/Cus-category-men.jpg" alt="Second slide">
                                </div>
                            </div>
                            <div class="d-block d-sm-none">
                                <img class="d-block w-100" src="images/Cus-category-children.jpg" alt="Second slide">
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <div class="icon-bg">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </div>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <div class="icon-bg">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </div>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>