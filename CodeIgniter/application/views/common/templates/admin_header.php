<?php

if(empty($_SESSION['user']) || !in_array($_SESSION['user']["role"], [1,2])) {
	header("location: http://localhost:8080/CodeIgniter/index.php/login");
}
?>
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
	<link rel="stylesheet" href="<?= base_url('../assets/css/header.css') ?>">
	<script src="https://kit.fontawesome.com/ba36fe9198.js" crossorigin="anonymous"></script>
	<link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
<div id="header">
	<div class="logo" style="text-align: center; display: table-cell; vertical-align: middle; width: 100vw;">
		<div style="width: 100px; height: 100px; display: inline-block;">
			<img align="middle" src="<?=base_url('../assets/images/1st Fashion logo.png');?>" style="max-width: 100%; max-height: 100%; width: auto; vertical-align: middle;display: table-cell;">
		</div>
	</div>
	<nav class=" navbar navbar-expand-sm navbar-light bg-light">
		<span class="logo-res">abc</span>
		<button class="navbar-toggler ml-auto hidden-sm-up float-s-right" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
				aria-controls="collapsibleNavId"
				aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavId">
			<ul class="navbar-nav mx-auto mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
					<a class="nav-link text-uppercase" href="<?=base_url().'dashboard'?>">dashboard<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link text-uppercase" href="<?=base_url().'dashboard/my_account'?>">account information<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-uppercase" href="#product-management">page management<span class="sr-only">(current)</span></a>

				</li>
				<li class="nav-item ">
					<a class="nav-link text-uppercase" href="<?=base_url().'dashboard/trending'?>">page management<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active"  <?= ($_SESSION['user']['role'] == 2) ? '' : 'hidden'; ?>>
					<a class="nav-link text-uppercase" href="<?=base_url().'dashboard/staff_management'?>">employees management<span class="sr-only">(current)</span></a>
				</li>
			</ul>
		</div>
	</nav>
</div>
</body>
</html>
