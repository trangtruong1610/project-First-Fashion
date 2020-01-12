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
	#scrollable::-webkit-scrollbar-track {
		width: 12px;
		background-color: rgba(250,250,250,.7);
	}
	#scrollable::-webkit-scrollbar
	{
		width: 10px;
		background-color: rgba(250,250,250,.7);
	}
	#scrollable::-webkit-scrollbar-thumb
	{
		border-radius: 5px;
		-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
		background-color: rgba(30,30,30,.05);
	}
</style>
<title>Trending</title>
<body style="font-family: Lora; font-size: 15px;">
<div class="container ">
	<div style="text-align: center;">
		<form method="post" action="<?=base_url().'Trending_Controller/trending_add'; ?>" enctype="multipart/form-data">
			<div class="text-capitalize header">Trending Content</div>
			<p style="font-style: italic; color: firebrick;">Please add at least 4 producs and maximum 8 products to trending.</p>
			<div id="scrollable" style="overflow: scroll; height: 100%;">
				<?php foreach($label as $label): ?>
				<div class="form-check form-check-inline" style="width: 20%;">
					<label class="form-check-label">
						<div class="card" style="width: 15vw; display: inline-block; margin:10px; text-align: center;<?= $label['Trending'] == 1 ? 'border: 2px solid rgba(80,150,250,.8)' : ''?> ">
							<div class="card-header">
								<input class="form-check-input" type="checkbox" name="trending[]" id="trending-box"
									   value="<?=$label['id'];?>"><?=$label['Name'];?>
							</div>
							<div class="card-body" style="width: 200px; height: 200px; display: inline-block">
								<img src="<?=$label['File'];?>" style="max-height: 100%; max-width: 100%; position:relative; height: auto; text-align: center;">
							</div>
							<div class="card-footer text-muted">
								<?=$label['Price'];?>
							</div>
						</div>
					</label>
				</div>
				<?php endforeach; ?>
				</select>
			</div>
			<div style="text-align: center;">
				<input type="submit" value="Submit" role="button" class="btn btn-dark" style="text-align: center;">
				<a type="button" value="Back" role="button" class="btn btn-dark" style="text-align: center;" href="<?=base_url().'dashboard'?>">Back</a>
			</div>
		</form>
	</div>
</div>
</body>
<?php $this->load->view('/common/templates/footer'); ?>
