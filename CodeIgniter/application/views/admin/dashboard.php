<?php $this->load->view('/common/templates/header'); ?>

<?php
if(empty($_SESSION['user']) || !in_array($_SESSION['user']["role"], [1,2])) {
	redirect(base_url().'login');
}
if (isset($_SESSION['error'])){
	echo $_SESSION['error'];
	unset($_SESSION['error']);
}
if (isset($_SESSION['msg'])){
	echo $_SESSION['msg'];
	unset($_SESSION['msg']);
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
	<link rel="stylesheet" href="<?=base_url('../assets/css/stylesheet.css') ?>">
	<link rel="stylesheet" href="<?= base_url('../assets/css/fonts.css')?>">
	<link rel="stylesheet" href="<?= base_url('../assets/css/fontawesome.css') ?>">
	<script src="<?=base_url('../assets/scripts/scripts.js') ?>"></script>
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
<div class="container-fluid" style="height: 100px; background-color: #EFEFEA">
	<div  class="dashboard header text-uppercase" style="font-size: 30px; ">
		Admin Dashboard
	</div>
	<span class="text-success"><?=$msg?></span>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-3 side-menu ">
			<!--Categories-->
			<div id="MenuCategory">
				<div class="side-menu-item side-menu-header debug">
                    <span>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </span>
					<span>ADMIN MENU</span>
				</div>
				<div class="side-menu-item list-item">
					<ol>
						<li class="list-item">
							<label>
								<a href="<?=base_url().'dashboard/member'?>"><input type="button" name="fashion" hidden>ADD MEMBER</a>
							</label>
						</li>
						<li class="list-item">
							<label>
								<a href="<?=base_url().'dashboard/add'?>"><input type="button" name="access" hidden>ADD PRODUCT</a>
							</label>
						</li>
						<li class="list-item">
							<label>
								<a href="<?=base_url().'dashboard/category'?>"><input type="button" name="children" hidden>ADD CATEGORY</a>
							</label>
						</li>
					</ol>
				</div>
			</div>
		</div>

		<div class="col-9">
			<br>
			<table class="table"  style="text-align: center">
				<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Size</th>
					<th>Color</th>
					<th>Meterial</th>
					<th>Price</th>
					<th>Origin</th>
					<th>Status</th>
					<th>Actions</th>
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

</div>
<hr>
</body>
<script>
	// When the user clicks on <div>, open the popup
	function myFunction() {
		alert("Delete success");
	}
</script>
</html>
<?php $this->load->view('/common/templates/footer'); ?>
