<?php $this->load->view('/common/templates/admin_header'); ?>

<?php

if(empty($_SESSION['user']) || !in_array($_SESSION['user']["role"], [1,2])) {
	header("location: http://localhost:8080/CodeIgniter/index.php/login");
}
?>
<html lang="en">
<head>
	<title>My Account</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<!-- Local Source -->

	<script src="<?php echo base_url('../assets/scripts/scripts.js') ?>"></script>
	<link rel="stylesheet" href="<?= base_url('../assets/css/stylesheet.css') ?>">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
</head>
<body>
<form method="post" action="" enctype="multipart/form-data">
	<div class="text-capitalize header">My Account</div>
	<div class="container-fluid">
		<table class="table table-bordered table-inverse" style="text-align: center">
			<thead style="table-inverse">
			<tr>
				<th style="width: 20%;">Name</th>
				<th style="width: 10%;">Phone</th>
				<th style="width: 15%;">Email</th>
				<th style="width: 15%;">Username</th>
				<th style="width: 15%;">Password</th>
				<th style="width: 15%;">Account Type</th>
			</tr>
			</thead>
			<tbody>
			<?php if(!empty($my_account) == TRUE ) { ?>
				<tr>
					<td scope="row"><?= $my_account['EmployeeName']; ?></td>
					<td><?= $my_account['Phone']; ?></td>
					<td><?= $my_account['Email']; ?></td>
					<td><?= $my_account['user']; ?></td>
					<td content="hidden"><?= ($my_account['Password']); ?></td>
					<td><?= $my_account['role'] == 2 ? 'SuperAdmin' : 'Admin'; ?></td>
				</tr>
			<?php }; ?>
			</tbody>
		</table>

	</div>
</form>
</body>
</html>
<?php $this->load->view('/common/templates/footer'); ?>
