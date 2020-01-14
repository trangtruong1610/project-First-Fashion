<?php $this->load->view('/common/templates/header'); ?>
<?php
if(empty($_SESSION['user']) || !in_array($_SESSION['user']["role"], [2])) {
	$_SESSION['error'] = "<script type='text/javascript'>alert('Only Super Admin can access this page');</script>";
	redirect(base_url().'dashboard');
}
if (isset($_SESSION['err_msg'])){
	echo $_SESSION['err_msg'];
	unset($_SESSION['err_msg']);
}
?>
<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Add Member</title>
</head>

<body>
	<div class="container">
		<form action="<?=base_url()?>form/form_member" method="post">
			<div class="form-group">
				<label for="exampleInputEmail1">Username</label>
				<input type="text" name="username" class="form-control" placeholder="Username">
				<span><?php echo form_error('name'); ?></span>

			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				<span><?php echo form_error('password'); ?></span>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Name</label>
				<input type="text" name="name" class="form-control" placeholder="Your Name">
				<span><?php echo form_error('name'); ?></span>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
				<span class="text-danger" ><?php echo form_error('email'); ?></span>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Phone</label>
				<input type="number" name="phone" class="form-control" placeholder="Your Phone Number">
				<span class="text-danger" ><?php echo form_error('phone'); ?></span>
			</div>
			<div class="text-center">
				<button type="submit" class="btn btn-info">Submit</button>
				<a href="<?=base_url().'dashboard'?>" class="btn btn-info">Back</a>
			</div>
		</form>
	</div>
</body>
</html>
<?php $this->load->view('/common/templates/footer'); ?>
