<?php $this->load->view('/common/templates/header'); ?>

<html lang="en">
<head>
    <title>Homepage</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Local Source -->

    <script src="<?php echo base_url('../assets/scripts/scripts.js') ?>"></script>
	<link rel="stylesheet" href="<?= base_url('../assets/css/stylesheet.css') ?>">
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
    <!--Carousel skeleton-->
    <div id="carouselId" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
            <li data-target="#carouselId" data-slide-to="2"></li>
        </ol>
    <!--Carousel content-->
        <div class="carousel-inner" role="listbox" style="height: 500px;">
            <div class="carousel-item active">
                <img src="<?php echo base_url('../assets/images/Banner/banner1.jpg" alt="First slide'); ?>" style="max-height: 100%;
	max-width: 100%; height: auto; position: relative; top: 50%; transform: translateY(-10%);">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('../assets/images/Banner/banner2.jpg" alt="Second slide'); ?>" style="max-height: 100%;
	max-width: 100%; height: auto; position: relative; top: 50%;">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('../assets/images/Banner/banner3.jpg" alt="Third slide'); ?>" style="max-height: 100%;
	max-width: 100%; height: auto; position: relative; top: 50%; transform: translateY(-10%);">
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
            <div class="col-md-4 debug cus-target-bg" style="background-image: url('http://localhost:8080/CodeIgniter/assets/images/Category/Cus-category-men.jpg')">
                <div class="filter">
                    <a href="">
                        <span class="cus-target">FOR MEN</span>
                    </a>
                </div>
            </div>
            <div class="col-md-4 debug cus-target-bg" style="background-image: url('http://localhost:8080/CodeIgniter/assets/images/Category/Cus-category-women.jpg')">
                <div class="filter">
                    <a href="">
                        <span class="cus-target">FOR WOMEN</span>
                    </a>
                </div>
            </div>
            <div class="col-md-4 debug cus-target-bg" style="background-image: url('http://localhost:8080/CodeIgniter/assets/images/Category/Cus-category-children.jpg')">
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
                <div class="homepage-header"><img src="<?php echo base_url('../assets/images/left-lines.png')?>"></div>
                <span>TOP BRANDS</span>
                <div class="homepage-header"><img src="<?php echo base_url('../assets/images/right-lines.png')?>"></div>
            </div>
			<form method="post" action="<?=base_url().'Home/select_category'?>" enctype="multipart/form-data">
				<div class="con-box debug row" style="text-align: center">
					<a class="col-md-2 box debug"><img src="<?php echo base_url('../assets/images/Brand/adidas-originals-logo-400x400.png')?>" style="vertical-align: middle; max-height: 100%; max-width: 100%; width: auto; top:50%; transform: translateY(-50%); position: relative;"  href=""></a>
					<a class="col-md-2 box debug"><img src="<?php echo base_url('../assets/images/Brand/1280px-Burberry_Logo.svg.png')?>" style="vertical-align: middle; max-height: 100%; max-width: 100%; width: auto; top:50%; transform: translateY(-50%); position: relative;" href=""></a>
					<a class="col-md-2 box debug"><img src="<?php echo base_url('../assets/images/Brand/1280px-Calvin_klein_logo.svg.png')?>" style="vertical-align: middle; max-height: 100%; max-width: 100%; width: auto; top:50%; transform: translateY(-50%); position: relative;"  href=""></a>
					<a class="col-md-2 box debug"><img src="<?php echo base_url('../assets/images/Brand/Cartier_logo.svg')?>"  style="vertical-align: middle; max-height: 100%; max-width: 100%; width: auto; top:50%; transform: translateY(-50%); position: relative;"  href=""></a>
					<a class="col-md-2 box debug"><img src="<?php echo base_url('../assets/images/Brand/1280px-D&G_logo.svg.png')?>"  style="vertical-align: middle; max-height: 100%; max-width: 100%; width: auto; top:50%; transform: translateY(-50%); position: relative;"  href=""></a>
					<a class="col-md-2 box debug"><img src="<?php echo base_url('../assets/images/Brand/Gap_Logo.png')?>"  style="vertical-align: middle; max-height: 100%; max-width: 100%; width: auto; top:50%; transform: translateY(-50%); position: relative;"  href=""></a>
					<a class="col-md-2 box debug"><img src="<?php echo base_url('../assets/images/Brand/1200px-Hugo-Boss-Logo.svg.png')?>" style="vertical-align: middle; max-height: 100%; max-width: 100%; width: auto; top:50%; transform: translateY(-50%); position: relative;"  href=""></a>
					<a class="col-md-2 box debug"><img src="<?php echo base_url('../assets/images/Brand/1280px-Louis_Vuitton_logo.svg.png')?>" style="vertical-align: middle; max-height: 100%; max-width: 100%; width: auto; top:50%; transform: translateY(-50%); position: relative;"  href=""></a>
					<a class="col-md-2 box debug"><img src="<?php echo base_url('../assets/images/Brand/1280px-Old_Navy_Logo.svg.png')?>" style="vertical-align: middle; max-height: 100%; max-width: 100%; width: auto; top:50%; transform: translateY(-50%); position: relative;"  href=""></a>
					<a class="col-md-2 box debug"><img src="<?php echo base_url('../assets/images/Brand/1280px-Prada-Logo.svg.png')?>"  style="vertical-align: middle; max-height: 100%; max-width: 100%; width: auto; top:50%; transform: translateY(-50%); position: relative;"  href=""></a>
				</div>
			</form>
		</div>
    </div>
<!--Trending-->
    <div id="trending">
        <div class="debug" style="margin-top: 20px">
            <div class="header debug">
                <div class="homepage-header"><img src="<?php echo base_url('../assets/images/left-lines.png')?>"></div>
                <span>TRENDING</span>
                <div class="homepage-header"><img src="<?php echo base_url('../assets/images/right-lines.png')?>"></div>
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
									<img src="<?php echo base_url('../assets/images/Trending/trending1.png" alt="First slide')?>">
									<img src="<?php echo base_url('../assets/images/Trending/trending2.png" alt="First slide')?>">
									<img src="<?php echo base_url('../assets/images/Trending/trending3.png" alt="First slide')?>">
									<img src="<?php echo base_url('../assets/images/Trending/trending4.png" alt="First slide')?>">
								</div>
							</div>
							<div class="d-none d-md-block d-lg-none">
								<div class="slide-box">
									<img src="<?php echo base_url('../assets/images/Trending/trending1.png" alt="First slide')?>">
									<img src="<?php echo base_url('../assets/images/Trending/trending2.png" alt="First slide')?>">
									<img src="<?php echo base_url('../assets/images/Trending/trending3.png" alt="First slide')?>">
								</div>
							</div>
							<div class="d-none d-sm-block d-md-none">
								<div class="slide-box">
									<img src="<?php echo base_url('../assets/images/Trending/trending1.png" alt="First slide')?>">
									<img src="<?php echo base_url('../assets/images/Trending/trending2.png" alt="First slide')?>">
								</div>
							</div>
							<div class="d-block d-sm-none">
								<img class="d-block w-100" src="<?php echo base_url('../assets/images/Trending/trending1.png" alt="First slide')?>">
							</div>
						</div>
						<div class="carousel-item">
							<div class="d-none d-lg-block">
								<div class="slide-box">
									<img src="<?php echo base_url('../assets/images/Trending/trending5.png" alt="Second slide')?>">
									<img src="<?php echo base_url('../assets/images/Trending/trending6.png" alt="Second slide')?>">
									<img src="<?php echo base_url('../assets/images/Trending/trending8.png" alt="Second slide')?>">
									<img src="<?php echo base_url('../assets/images/Trending/trending7.png" alt="Second slide')?>">
								</div>
							</div>
							<div class="d-none d-md-block d-lg-none">
								<div class="slide-box">
									<img src="<?php echo base_url('../assets/images/Trending/trending5.png" alt="Second slide')?>">
									<img src="<?php echo base_url('../assets/images/Trending/trending6.png" alt="Second slide')?>">
									<img src="<?php echo base_url('../assets/images/Trending/trending8.png" alt="Second slide')?>">
								</div>
							</div>
							<div class="d-none d-sm-block d-md-none">
								<div class="slide-box">
									<img src="<?php echo base_url('../assets/images/Trending/trending5.png" alt="Second slide')?>">
									<img src="<?php echo base_url('../assets/images/Trending/trending6.png" alt="Second slide')?>">
								</div>
							</div>
							<div class="d-block d-sm-none">
								<img class="d-block w-100" src="<?php echo base_url('../assets/images/Trending/trending5.png" alt="Second slide')?>">
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

<?php $this->load->view('/common/templates/footer'); ?>
