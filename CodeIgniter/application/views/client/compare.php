<?php $this->load->view('/common/templates/header'); ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/ba36fe9198.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?=base_url('/assets/css/stylesheet.css') ?>">

	<title>Compare</title>
</head>
<style>

</style>
<body>
<div id="compare">
	<div class="container-fluid ">
		<div style="font-size: 30px; margin-bottom: 50px" class="dashboard header text-uppercase">
			PRODUCT COMPARE
		</div>
	</div>
	<div class="container-fluid debug">
		<?php foreach(array_chunk($data, 3) as $row_data_break) :?>
			<div class="card-deck" style="margin-bottom: 50px">
				<?php foreach($row_data_break as $row) :?>
					<div class="col-md-4 col-sm-6">
						<div class="card h-100">
							<div style="height: 300px; text-align: center; padding: 10px">
								<img align="middle" class="card-img-top" src="<?=$row['File']?>" alt="<?=$row['Name']?>" style="max-height:100%; max-width: 100%; width: auto; position: relative; top: 50%; transform: translateY(-50%);">
							</div>
							<div class="card-body" style="text-align: center; font-size: 25px;">
								<h4 style="font-weight: bold" class="card-title"><?=$row['Name']?></h4>
								<p class="card-text"><?=$row['Price']?></p>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">
									<span style="font-weight: bold">Color :</span> <?=$row['Color']?>
								</li>
								<li class="list-group-item">
									<span style="font-weight: bold">Material :</span> <?=$row['Material']?>
								</li>
								<li class="list-group-item">
									<span style="font-weight: bold">Description :</span> <?=$row['Description']?>
								</li>
								<li class="list-group-item">
									<span style="font-weight: bold">Origin :</span> <?=$row['Origin']?>
								</li>
								<li class="list-group-item">
									<span style="font-weight: bold">Status :</span> <?=$row['Status'] == 1 ? 'In Stock' : 'Sold Out'?>
								</li>
							</ul>
							<div class="card-footer text-muted" style="text-align: center;">
								<a name="details" id="" class="btn btn-dark" href="<?=base_url()."product/{$row['id']}"?>" role="button">Details <i class="fas fa-search" style="font-size: 12px;" aria-hidden="true"></i></a>
								<form style="display: inline" action="<?=base_url().'product/delete'?>" method="post">
									<button class="btn btn-dark" onclick="myFunction()" name="delete" type="submit" formmethod="post" value="<?=$row['id']?>">Delete</button>
								</form>
							</div>
						</div>
					</div>
				<?php endforeach;?>
			</div>
		<?php endforeach;?>
	</div>

</div>
</body>
</html>

<?php $this->load->view('/common/templates/footer'); ?>

