<?php $this->load->view('/common/templates/header'); ?>

<?php
if(empty($_SESSION['user']) || !in_array($_SESSION['user']["role"], [1,2])) {
	header('location: http://localhost:8080/CodeIgniter/index.php/login');
}
?>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
	div{padding-top: 10px;}
	input, select{font-size: 15px;margin-left: 12px;}
	a{text-decoration: none;}
</style>
<title>Add Product</title>

<div class="container">
	<form action="<?php echo base_url()?>form/form_validation" method="post" enctype="multipart/form-data">
		<?php if ($this->uri->segment(2) == 'inserted')
		{
			echo '<p class="text-success">Add successful</p>';
		}
		?>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="name">
			<span><?php echo form_error('name'); ?></span>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Size</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="size">
			<span><?php echo form_error('size'); ?></span>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Color</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="color">
			<span><?php echo form_error('color'); ?></span>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Material</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="material">
			<span><?php echo form_error('material'); ?></span>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Description</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="description">
			<span><?php echo form_error('description'); ?></span>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Price</label>
		<div class="col-sm-10">
			<input type="number" class="form-control" name="price">
			<span><?php echo form_error('price'); ?></span>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Origin</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="origin">
			<span><?php echo form_error('origin'); ?></span>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Avatar</label>
		<div class="col-sm-10">
			<input type="file" name="file">
			<span><?php echo form_error('file'); ?></span>
		</div>
	</div>

	<br>
		<div class="text-center">
			<input class="btn btn-info" type="submit" name="submit" value="Submit" />
			<a class="btn btn-info" href="<?=base_url().'dashboard'?>">Back</a>
		</div>
</form>
</div>

<?php $this->load->view('/common/templates/footer'); ?>
