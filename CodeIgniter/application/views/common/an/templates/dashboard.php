<!doctype html>
<html lang="en">
<head>
	<title><?php ?></title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Local Sources -->
	<link rel="stylesheet" href="<?= base_url('/CodeIgniter/An/assets/css/master_style.css')?>">
	<link rel="stylesheet" href="<?= base_url('/CodeIgniter/An/assets/css/fonts.css')?>">
	<link rel="stylesheet" href="<?= base_url('/CodeIgniter/An/assets/css/fontawesome.css') ?>">
	<script src="<?=base_url('/CodeIgniter/An/assets/scripts/scripts.js') ?>"></script>
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
			integrity="sha384-UO2eT0CpHqdSJQhJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
			crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
			integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
			crossorigin="anonymous"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
</head>
<body>
<div class="container-fluid debug">
	<div class="dashboard header text-uppercase">
		Admin Dashboard
	</div>
	<div class="row">
		<div class="col-md-3 col-sm-4">
			<div id="dashboard-sb" class="debug">
				<div id="account-info">
					<!--Account Management-->
					<div class="side-menu-item side-menu-header debug">
						<div class="menu dashboard text-uppercase">Your Account</div>
						<span><i class="fa fa-caret-down" aria-hidden="true"></i></span>
					</div>
					<div class="dashboard-mini-menu" id="account">
						<ul>
							<li>Account Information</li>
							<li>Change Password</li>
						</ul>
					</div>
					<!--Inbox/Message-->
					<div class="side-menu-item side-menu-header debug">
						<div class="menu dashboard text-uppercase">Inbox</div>
						<span><i class="fa fa-caret-down" aria-hidden="true"></i></span>
					</div>
					<div class="dashboard-mini-menu" id="inbox">
						<ul>
							<li>Inbox</li>
							<li>Sent</li>
						</ul>
					</div>
					<!--Product Management-->
					<div class="side-menu-item side-menu-header debug">
						<div class="menu dashboard text-uppercase">Product Management</div>
						<span><i class="fa fa-caret-down" aria-hidden="true"></i></span>
					</div>
					<div class="dashboard-mini-menu" id="product-management">
						<ul>
							<li>Product Overview</li>
							<li>Add Product</li>
							<li>Edit Product</li>
							<li>Delete Product</li>
						</ul>
					</div>
					<!--Page Content Management-->
					<div class="side-menu-item side-menu-header debug">
						<div class="menu dashboard text-uppercase">Content Management</div>
						<span><i class="fa fa-caret-down" aria-hidden="true"></i></span>
					</div>
					<div class="dashboard-mini-menu" id="content-management">
						<ul>
							<li>Top Banner</li>
							<li>Homepage Content</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-9 col-sm-8">
			<?php include "../templates/dashboard.php"; ?>
		</div>
	</div>
</div>
</body>
</html>
