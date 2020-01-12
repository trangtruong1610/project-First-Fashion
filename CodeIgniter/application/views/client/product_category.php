<?php $this->load->view('/common/templates/header'); ?>
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
</div>
<div class="row">
	<!--Left side menu-->
	<div class="col-3 side-menu ">
		<!--Categories-->
		<div id="MenuCategory">
			<div class="side-menu-item side-menu-header debug">
                    <span>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </span>
				<span>PRODUCT CATEGORIES</span>
			</div>
			<div class="side-menu-item list-item">
				<ol>
					<li class="list-item">
						<label>
							<a href="<?=base_url().'product/fashion'?>"><input type="button" name="women" hidden>FASHION</a>
						</label>
					</li>
					<li class="list-item">
						<label>
							<a href="<?=base_url().'product/accessories'?>"><input type="button" name="access" hidden>ACCESSORIES</a>
						</label>
					</li>
					<li class="list-item">
						<label>
							<a href="<?=base_url().'product/children'?>"><input type="button" name="children" hidden>FOR CHILDREN</a>
						</label>
					</li>
				</ol>
			</div>
		</div>
	</div>
	<!--Product page-->
	<div class="col-9">
		<div id="filter"></div>
		<div id="product-page-all" class="side-menu-item">
			<div class="container-fluid debug">
				<?php foreach(array_chunk($data, 3) as $row_data_break) :?>
					<div class="card-deck" style="margin-bottom: 50px">
						<?php foreach($row_data_break as $row) :?>
							<div class="col-md-4 col-sm-6">
								<div class="card h-100">
									<div style="height: 300px; text-align: center; padding: 10px">
										<img align="middle" class="card-img-top" src="<?=$row['File']?>" alt="<?=$row['Name']?>" style="max-height:100%; max-width: 100%; width: auto; position: relative; top: 50%; transform: translateY(-50%);">
									</div>
									<div class="card-body">
										<a id="name" href="<?=base_url()."product/{$row['id']}"?>"><h4 class="card-title"><?=$row['Name']?></h4></a>
										<p style="font-size: 20px" class="card-text"><?=$row['Price']?></p>
									</div>
									<div class="card-footer text-muted" style="text-align: center;">
										<a name="details" id="" class="btn btn-dark" href="<?=base_url()."product/{$row['id']}"?>" role="button">Details <i class="fas fa-search" style="font-size: 12px;" aria-hidden="true"></i></a>
										<form style="display: inline" action="<?=base_url().'product/add_compare'?>" method="post">
											<button class="btn btn-dark" onclick="myFunction()" name="add" type="submit" formmethod="post" value="<?=$row['id']?>">Compare <i class="fas fa-search" style="font-size: 12px;" aria-hidden="true"></i></button>
										</form>
									</div>
								</div>
							</div>
						<?php endforeach;?>
					</div>
				<?php endforeach;?>
			</div>

		</div>
	</div>
</div>
</div>
<script>
	// When the user clicks on <div>, open the popup
	function myFunction() {
		alert("Add to compare success");
	}
</script>
</body>
</html>

<?php $this->load->view('/common/templates/footer'); ?>


