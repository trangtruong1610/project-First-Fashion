<!doctype html>
<html lang="en">
<head>
    <title>Homepage</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Styles Source -->
    <link rel="stylesheet" href="assets/css/styles.css">
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
<div class="container-fluid" style="display: table-row; min-height: max-content">
<!--Banner-->
    <div id="carouselId" class="debug carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
            <li data-target="#carouselId" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
<!--            --><?php
//            require ("Connection.php");
//            $conn = conn_db();
//
//            require ("Admin_Banner.php");
//            $bannerslider[] = AddBanner();
//            foreach ($bannerslider as $slidename=>$slidelink) ?><!-- {-->
<!--                <div class="item --><?php //echo ($slidename == 0) ? 'active' : '' ?><!--">-->
<!--                    <img style="height: 400px;width:100%;" src="--><?php // echo $bannerslider['file_name']; ?><!--" height="100" alt="Image of every carousel"/>-->
<!--                </div>-->
<!--            }-->
        </div>

        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<!--Customer Categories-->
    <div class="debug container-fluid row cus-target" style="height: 380px">
        <div class="col-md-4 debug cus-target-bg" style="background-image: url('Cus-category-men.jpg')">
            <div class="filter">
                <a href="">
                    <span class="cus-target">FOR MEN</span>
                </a>
            </div>
        </div>
        <div class="col-md-4 debug cus-target-bg" style="background-image: url('Cus-category-women.jpg')">
            <div class="filter">
                <a href="">
                    <span class="cus-target">FOR WOMEN</span>
                </a>
            </div>
        </div>
        <div class="col-md-4 debug cus-target-bg" style="background-image: url('Cus-category-children.jpg')">
            <div class="filter">
                <a href="">
                    <span class="cus-target">FOR CHILDREN</span>
                </a>
            </div>
        </div>
    </div>
<!--Top Brands-->
    <div class="debug">
        <h5 class="header">TOP BRANDS</h5>
        <div class="debug top-brand">
            <span>
                <img src="1280px-Chanel_logo.svg.png" style="width: 200px">
            </span>
            <span>
                <img src="1280px-Chanel_logo.svg.png" style="width: 200px">
            </span>
            <span>
                <img src="1280px-Chanel_logo.svg.png" style="width: 200px">
            </span>
            <span>
                <img src="1280px-Chanel_logo.svg.png" style="width: 200px">
            </span>
            <span>
                <img src="1280px-Chanel_logo.svg.png" style="width: 200px">
            </span>
        </div>
    </div>
<!--Trending-->
    <div class="debug"></div>
</div>
</body>
</html>