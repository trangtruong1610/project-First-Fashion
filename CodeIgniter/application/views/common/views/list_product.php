<!doctype html>
<html lang="en">
<head>
	<title>Products</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Local Sources -->
	<link rel="stylesheet" href="<?=base_url('../assets/css/stylesheet.css')?>">
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
	<?php foreach(array_chunk($data, 3) as $row_data_break) :?>
	<div class="card-deck" style="margin-bottom: 50px">
		<?php foreach($row_data_break as $row) :?>
		<div class="col-md-4 col-sm-6">
			<div class="card h-100">
				<div style="height: 300px; text-align: center; padding: 10px">
					<img align="middle" class="card-img-top" src="<?=$row['File']?>" alt="<?=$row['Name']?>" style="max-height:100%; max-width: 100%; width: auto; position: relative; top: 50%; transform: translateY(-50%);">
				</div>
				<div class="card-body">
					<h4 class="card-title"><?=$row['Name']?></h4>
					<p class="card-text"><?=$row['Price']?></p>
				</div>
				<div class="card-footer text-muted" style="text-align: center;">
					<a name="details" id="" class="btn btn-dark" href="<?=base_url()."product/{$row['id']}"?>" role="button">Details <i class="fas fa-search" style="font-size: 12px;" aria-hidden="true"></i></a>
					<a name="compare" id="add_compare" class="btn btn-dark" href="#" role="button">Compare <i class="fas fa-refresh" style="font-size: 12px;" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
		<?php endforeach;?>
	</div>
	<?php endforeach;?>
</div>
</body>
</html>
