<?php $this->load->view('/common/templates/admin_header'); ?>

<?php

if(empty($_SESSION['user']) || !in_array($_SESSION['user']["role"], [1,2])) {
	header("location: http://localhost:8080/CodeIgniter/index.php/login");
}
?>
<!doctype html>
<html lang="en">
<head>
	<title>Dashboard</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?=base_url('../An/assets/css/stylesheet.css') ?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
			integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
			crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
			integrity="sha384-UO2eT0CpHqdSJQhJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
			crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
			integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
			crossorigin="anonymous"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
</head>
<body style="font-family: Lora;">
<div class="container-fluid ">
	<div class="dashboard header text-uppercase">
		Admin Dashboard
	</div>
</div>
<div class="container" id="product-management">
	<div style="margin: 30px; text-align: right">
		<div>
			<a class="btn btn-dark btn-lg" href="<?=base_url().'/dashboard/add'?>">Add Product</a>
		</div>
	</div>
	<div>
		<table class="table" style="text-align: center">
			<thead>
			<tr>
				<th>ID</th>
				<th style="width: 5%;">Name</th>
				<th style="width: 5%;">Size</th>
				<th style="width: 20%;">Color</th>
				<th style="width: 15%;">Material</th>
				<th style="width: 5%;">Price</th>
				<th style="width: 15%;">Origin</th>
				<th style="width: 15%;">Status</th>
				<th style="width: 20%;">Actions</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($data as $key => $value) : ?>
				<tr>
					<th scope="row"><?=$value['id']?></th>
					<td style="text-align: left"><?=$value['Name']?></td>
					<td><?=$value['Size']?></td>
					<td><?=$value['Color']?></td>
					<td><?=$value['Material']?></td>
					<td><?=$value['Price']?></td>
					<td><?=$value['Origin']?></td>
					<td><?=$value['Status'] == 1 ? "In Stock" : "Sold Out" ?></td>
					<td>
						<a href="<?=base_url()."product/{$value['id']}"?>">View</a> |
						<a href="<?=base_url()."dashboard/edit/{$value['id']}"?>">Edit</a>|
						<a onclick="myFunction()" href="<?=base_url()."dashboard/delete/{$value['id']}"?>">Delete</a>
					</td>
				</tr>
			<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
</body>
<script>
	// When the user clicks on <div>, open the popup
	function myFunction() {
		alert("Delete success");
	}
</script>
</html>
<?php $this->load->view('/common/templates/footer'); ?>
