<?php $this->load->view('/common/templates/header');?>
<?php
/*if (isset($_POST["add"])){
	$id = (int)($_POST['add']);
	array_push($_SESSION['compare'], $id);
}
$res = array_slice($_SESSION['compare'], -3, 3, true);
var_dump($_SESSION['compare']);
echo '<br>';
var_dump($res);

*/?>
<!doctype html>
<html lang="en">
<head>
    <title>Detail Product Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Local Sources -->
	<link rel="stylesheet" href="<?= base_url('../assets/css/stylesheet.css'); ?>"
	<link rel="stylesheet" href="<?= base_url('../assets/css/fonts.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('../assets/css/fontawesome.css'); ?>">
    <script src="<?=base_url('../assets/scripts/scripts.js'); ?>"></script>
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
<style>
	#product-scrollbar::-webkit-scrollbar-track {
		width: 12px;
		background-color: rgba(250,250,250,.7);
	}
	#product-scrollbar::-webkit-scrollbar
	{
		width: 5px;
		background-color: rgba(250,250,250,.7);
	}
	#product-scrollbar::-webkit-scrollbar-thumb
	{
		border-radius: 5px;
		-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
		background-color: rgba(30,30,30,.05);
	}
</style>
<body id="sample">
<div class="debug container-fluid wrap">
	<div class="row" style="margin-bottom: 50px; height: 35em;">
		<!--product images-->
		<div class="col-md-6 col-sm-4 row debug">
			<?php foreach ($data as $d) :?>
			<div id="preview-img" class="img-ava col-md-9" style="height: 30em; width: auto; text-align: center;">
				<img src="<?php echo $d['File']; ?>" class="img-fluid rounded-top" alt="" style="max-height: 100%; max-width: 100%; width: auto;">
			</div>
			<div class="col-md-3 debug" id="product-scrollbar" style="overflow: scroll; height: 30em; width: 100%; text-align: center;">
				<div class="img-sub card-deck" style="display: inline-block;">
					<div class="card">
						<img src="<?=$d['File']; ?>" class="card-img-top source-img" alt="">
					</div>
					<?php foreach ($files as $file) :?>
						<div class="card">
							<img src="<?=$file['link']; ?>" class="card-img-top  source-img" alt="">
						</div>
					<?php endforeach;?>
				</div>
			</div>
		</div>
		<!--product detail-->
		<div class="col-md-6 col-sm-8 debug">
			<div class="product_detail">
				<div>
					<h3><?=$d['Name']; ?></h3>
					<h4><?=$d['Price']; ?></h4>
				</div>
				<hr class="p_line">
				<div class="debug" style="width: 100%; margin: 20px 0">
					Quantity: <?=$d['Status'] == 1 ? 'In Stock': 'Sold Out'?>
				</div>
				<div class="p_action-group">
					<a name="download" id="r" class="btn btn-light" href="<?=base_url()."dashboard/file/{$d['id']}"?>" role="button" download="">
						<span>
							Download <?=$d['Name']; ?> detail
						</span>
						<i class="fa fa-download" aria-hidden="true"></i>
					</a>
					<form action="" method="post">
						<button class="btn btn-light btn-block" onclick="myFunction()" name="add" type="submit" formmethod="post" value="<?=$d['id']; ?>" >
						Add to compare
						<i class="fa fa-refresh" aria-hidden="true"></i>

						</button>
					</form>
				</div>
				<hr class="p_line">
				<div class="product_info">

					<div id="" class="p_detail">
						<div>Categories: <?php foreach ($category as $category): echo "{$category['CategoryName']} "; endforeach;?>	</div>
					</div>
					<!--product description-->
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<ul id="tabs" class="nav nav-tabs">
									<li class="nav-item">
										<a href="" data-target="#description" data-toggle="tab" class="nav-link small text-uppercase active">Description</a>

									</li>
									<li class="nav-item">
										<a href="" data-target="#additional-info" data-toggle="tab" class="nav-link small text-uppercase">Additional Information</a>
									</li>
								</ul>
								<div id="tabsContent" class="tab-content">
									<div id="description" class="tab-pane fade active show">
										<div class="row pb-2">
											<div class="col-sm-12">
												<?=$d['Description']; ?>
												</p>
											</div>
										</div>
									</div>
									<div id="additional-info" class="tab-pane fade">
										<div class="row pb-2">
											<div class="col-sm-12">
												<table class="table table-striped table-inverse table-responsive">
													<tbody>
													<tr>
														<td>Material : </td>
														<td scope="row" class="tb-header"><?=$d['Material']; ?></td>
													</tr>
													<tr>
														<td>Size :</td>
														<td scope="row" class="tb-header"><?=$d['Size']; ?></td>
													</tr>
													<tr>
														<td>Color :</td>
														<td scope="row " class="tb-header"><?=$d['Color']; ?></td>
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
				</div>
			</div>
		</div>
	</div>
	<?php endforeach;?>
	<!--product suggestion-->
	<div class="container-fluid debug" style="margin-top: 30px;">
		<div class="header debug">
			<div class="homepage-header"><img src="<?=base_url('../assets/images/left-lines.png'); ?>"></div>
			<span>YOU MAY ALSO LIKE</span>
			<div class="homepage-header"><img src="<?=base_url('../assets/images/right-lines.png'); ?>"></div>
		</div>
		<div class="card-deck" style="margin-top: 30px;">
			<?php foreach ($similar as $row): ?>
				<div class="col-md-4 col-sm-6">
					<div class="card h-100">
						<div style="height: 300px; text-align: center; padding: 10px">
							<img align="middle" class="card-img-top" src="<?=$row['File']; ?>" alt="<?=$row['Name']; ?>"
								 style="max-height:100%; max-width: 100%; width: auto; position: relative; top: 50%; transform: translateY(-50%);">
						</div>
						<div class="card-body">
							<h4 class="card-title"><?=$row['Name']; ?></h4>
							<p class="card-text"><?=$row['Price']; ?></p>
						</div>
						<div class="card-footer text-muted" style="text-align: center;">
							<a name="details" id="" class="btn btn-dark" href="<?=base_url()."product/{$row['product_id']}"; ?>" role="button">Details <i class="fas fa-search" style="font-size: 12px;" aria-hidden="true"></i></a>
							<a name="compare" id="add_compare" class="btn btn-dark" href="#" role="button">Compare <i class="fas fa-refresh" style="font-size: 12px;" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
		<?php endforeach; ?>
		</div>
	</div>
</div>
</body>
<script>
	$('.card-img-top .source-img').on('click', function() {
		var imgsrc = $(this).attr('src');
		$('#preview-img').attr('src', imgsrc);
	});
</script>
</html>
<?php $this->load->view('/common/templates/footer');?>
