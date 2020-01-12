<?php $this->load->view('/common/templates/admin_header'); ?>

<?php

if(empty($_SESSION['user']) || !in_array($_SESSION['user']["role"], [1,2])) {
	header("location: http://localhost:8080/CodeIgniter/index.php/login");
}
if(!in_array($_SESSION['user']["role"], [2])) {
	header("location: http://localhost:8080/CodeIgniter/index.php/dashboard");
}
?>
<title>Employeee Management</title>
<body style="font-family: Lora; font-size: 15px;">
<div class="container">
	<div>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="text-capitalize header">Employees Information</div>
			<div style="margin: 30px; text-align: right;">
				<div>
					<a style="font-size: 17px;" class="btn btn-dark btn-lg" href="">Create New Account</a>
				</div>
			</div>
			<div class="container-fluid">
				<table class="table table-bordered table-inverse" style="text-align: center">
					<thead style="table-inverse">
					<tr>
						<th style="width: 20%;">Employee Name</th>
						<th style="width: 10%;">Phone</th>
						<th style="width: 15%;">Email</th>
						<th style="width: 15%;">Username</th>
						<th style="width: 15%;">Account Type</th>
						<th style="width: 10%;">Status</th>
						<th style="width: 15%;">Action</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach ($admin as $row): ?>
					<tr>
						<td scope="row"><?= $row['EmployeeName']; ?></td>
						<td><?= $row['Phone']; ?></td>
						<td><?= $row['Email']; ?></td>
						<td><?= $row['Username']; ?></td>
						<td><?= $row['AccTypeID'] == 2 ? 'SuperAdmin' : 'Admin'; ?></td>
						<td><?= $row['Status'] == 1 ? 'Active' : 'Deactive'; ?></td>
						<td>
							<a href="" class="">Deactive</a>
						</td>
					</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
				
			</div>
		</form>
	</div>
</div>
</body>
<?php $this->load->view('/common/templates/footer'); ?>

