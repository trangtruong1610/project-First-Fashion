<?php $this->load->view('/common/templates/header'); ?>

<?php
if(empty($_SESSION['user']) || !in_array($_SESSION['user']["role"], [1,2])) {
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
	<form action="<?=base_url()?>form/form_category" method="post">
		<div class="form-group">
			<label for="exampleInputEmail1">Category Name</label>
			<input type="text" name="category_name" class="form-control" placeholder="Enter Category Name">
			<span class="text-danger" ><?php echo form_error('category_name'); ?></span>

		</div>
		<div class="form-group">
			<label for="exampleFormControlSelect1">Category Type</label>
			<select class="form-control" name="parent_id" id="exampleFormControlSelect1">
				<option value="1">FASHION</option>
				<option value="2">ACCESSORIES</option>
				<option value="3">FOR CHILDREN</option>
			</select>
		</div>
		<div class="form-group form-check">
			<input name="brand" type="checkbox" class="form-check-input" value="brand">
			<label class="form-check-label" for="exampleCheck1">Brand</label>
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-info">Submit</button>
			<a class="btn btn-info" href="<?=base_url().'dashboard'?>">Back</a>
		</div>
	</form>
</div>
</body>
<?php $this->load->view('/common/templates/footer'); ?>
