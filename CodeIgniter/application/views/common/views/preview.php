<?php $this->load->view('/common/templates/header');?>
<!doctype html>
<lang="en">
<head>
	<title>Detail Product Page</title>
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
<div class="debug container-fluid wrap">
	<?php foreach ($preview as $d) :?>
		<div id="preview_control">
		<div style="font-family: Vesta-SemiBold; font-style: italic; font-size: 2em;">
			Product Preview
		</div>
		<span>
			<a name="" id="" class="btn btn-light" href="<?=base_url().'dashboard/edit/'.$d['id']?>" role="button">Back to edit</a>
			<a name="" id="" class="btn btn-light" href="<?=base_url().'dashboard'?>" role="button">Back to dashboard</a>
		</span>
	</div>
		<div class="row" style="margin-bottom: 50px;">
		<!--product images-->
		<div class="col-md-6 col-sm-4 row debug">
			<div class="img-ava col-md-9">
				<img data-target="" src="<?=$d['File']?>" class="img-fluid rounded-top" alt="">
			</div>
			<div class="img-sub col-md-3 debug">
				<?php foreach ($files as $file) :?>
					<div class="card">
						<img class="card-img-top" src="<?=$file['link']?>" alt="">
					</div>
				<?php endforeach;?>
			</div>
		</div>
		<!--product detail-->
		<div class="col-md-6 col-sm-8 debug">
			<div class="product_detail">
				<div>
					<h3><?=$d['Name']?></h3>
					<h4><?=$d['Price']?></h4>
				</div>
				<hr class="p_line">
				<div class="debug" style="text-align: center; width: 100%; margin: 20px 0">
					Quantity: <?=$d['Status'] = 1 ? 'In Stock': 'Sold Out'?>
				</div>
				<div class="p_action-group">
					<a name="download" id="r" class="btn btn-light" href="#" role="button" download="">
						<span>
							Download <?=$d['Name']?> detail
						</span>
						<i class="fa fa-download" aria-hidden="true"></i>
					</a>
					<form action="" method="post">
						<button class="btn btn-light btn-block" onclick="myFunction()" name="add" type="submit" formmethod="post" value="<?=$d['id']?>" >
							Add to compare
							<i class="fa fa-refresh" aria-hidden="true"></i>
						</button>
					</form>
				</div>
				<hr class="p_line">
				<div class="product_info">
					<div id="" class="p_detail">
					</div>
					<div class="social-icon">
						<a href="">
							<i class="fab fa-facebook debug" aria-hidden="true"></i>
						</a>
						<a href="">
							<i class="fab fa-twitter debug" aria-hidden="true"></i>
						</a>
						<a href="">
							<i class="fab fa-google debug" aria-hidden="true"></i>
						</a>
						<a href="">
							<i class="fab fa-youtube debug" aria-hidden="true"></i>
						</a>
						<a href="">
							<i class="fab fa-skype debug" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--product description-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<ul id="tabs" class="nav nav-tabs">
					<li class="nav-item">
						<a href="" data-target="#description" data-toggle="tab" class="nav-link small text-uppercase">Description</a>

					</li>
					<li class="nav-item">
						<a href="" data-target="#additional-info" data-toggle="tab" class="nav-link small text-uppercase active">Additional Information</a>
					</li>
				</ul>
				<div id="tabsContent" class="tab-content">
					<div id="description" class="tab-pane fade">
						<div class="row pb-2">
							<div class="col-sm-12">
								<?=$d['Description']?>
								</p>
							</div>
						</div>
					</div>
					<div id="additional-info" class="tab-pane fade active show">
						<div class="row pb-2">
							<div class="col-sm-12">
								<table class="table table-striped table-inverse table-responsive">
									<tbody>
									<tr>
										<td>Material : </td>
										<td scope="row" class="tb-header"><?=$d['Material']?></td>
									</tr>
									<tr>
										<td>Size :</td>
										<td scope="row" class="tb-header"><?=$d['Size']?></td>
									</tr>
									<tr>
										<td>Color :</td>
										<td scope="row " class="tb-header"><?=$d['Color']?></td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach;?>
</div>
</body>
</html>
<?php $this->load->view('/common/templates/footer');?>
