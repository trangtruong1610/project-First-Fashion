<!doctype html>
<html lang="en">
<head>
    <title><?php ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Local Sources -->
	<link rel="stylesheet" href="<?= base_url('../assets/css/stylesheet.css')?>">
	<link rel="stylesheet" href="<?= base_url('../assets/css/fonts.css')?>">
	<link rel="stylesheet" href="<?= base_url('../assets/css/fontawesome.css') ?>">
    <script src="<?=base_url('../assets/scripts/scripts.js') ?>"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
</head>
<body>
<div class="container-fluid debug">
    <!--Page Title Bar-->
<!--    <div id="page-title-bar" class="page-title-bar">-->
<!--        <div class="container-fluid debug">-->
<!--            <nav class="crumb-bread">-->
<!--                <ol>-->
<!--                    <li class="crumb-bread"><a href="">Fashion</a> </li>-->
<!--                    <li class="crumb-bread"><a href="">Products</a> </li>-->
<!--                    <li class="crumb-bread">For women</li>-->
<!--                </ol>-->
<!--            </nav>-->
<!--        </div>-->
    </div>
    <div class="debug row">
    <!--Left side menu-->
        <div class="col-sm-3 debug side-menu">
            <!--Categories-->
            <div id="MenuCategory" class="debug">
                <div class="side-menu-item side-menu-header debug">
                    <span>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </span>
                    <span>PRODUCT CATEGORIES</span>
                </div>
				<form method="post" action="<?php base_url().'product/select_by_category' ?>">
					<div class="side-menu-item list-item">
						<ol>
							<li class="list-item">
								<label>
									<input type="button" name="category" value="accessories" hidden>
									ACCESSORIES
								</label>
							</li>
							<li class="list-item">
								<label>
									<input type="button" name="category" value="kid fashion" hidden>
									FOR CHILDREN
								</label>
							</li>
							<li class="list-item">
								<label>
									<input type="button" name="category" value="men" hidden>
										FOR MEN
								</label>
							</li>
							<li class="list-item">
								<label>
									<input  type="button" name="category" value="women" hidden>
										FOR WOMEN
								</label>
							</li>
						</ol>
					</div>
				</form>
            </div>
            <!--Brands-->
            <div id="MenuBrand" class="debug">
                <div class="side-menu-item side-menu-header debug">
                    <span>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </span>
                    <span>PRODUCT BRANDS</span>
                </div>
                <div id="list-brands" class="side-menu-item list-item">
					<?php foreach($brand as $row) :?>
					<div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="<?=$row['CategoryName']?>" id="<?=$row['CategoryName']?>" value="<?=$row['CategoryName']?>">
							<?=$row['CategoryName']?>
                        </label>
                    </div>
					<?php endforeach;?>
					<form action="" method="post" enctype="multipart/form-data">
						<a href="" name="" id="" class="btn btn-dark" type="button" value="" style="margin-top: 20px; color: #f5f5f5; font-family: MuseoSansW01-Rounded300">Select</a>
					</form>
				</div>
            </div>
        </div>
        <!--Product page-->
        <div class="col-sm-9 debug">
            <div id="filter"></div>
            <div id="product-page-all" class="side-menu-item">
				<?php include "list_product.php";?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
