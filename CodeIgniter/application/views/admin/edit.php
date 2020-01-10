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

</style>
<title>Edit Product</title>
<body>
<div class="container">
	<?php foreach ($edit as $value) :?>
	<form action="<?=base_url().'form_update/edit_by_id/'.$value["id"]; ?>" method="post" enctype="multipart/form-data">
		<div class="text-capitalize header">product amendment</div>
		<div class="table-responsive">
			<table class="table table-inverse mx-auto w-auto" style="width: auto">
			<thead class="thead-inverse">
				<tr>
					<th scope="colgroup" style="width: 30%">Product Information</th>
					<th scope="colgroup" style="width: 70%">Update Information</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($edit as $key => $value) : ?>
				<tr>
					<th>ID</th>
					<th scope="row" style="text-align: center">
						<?=$value['id']; ?>
					</th>
				</tr>
				<tr>
					<th>Name</th>
					<td class="new_value">
						<div class="form-group">
							<label for="revised name"></label>
							<input type="text"
								   class="form-control" value="<?=$value['Name']; ?>" name="Name" id="" aria-describedby="helpId" placeholder="Revised product name">
						</div>
					</td>
				</tr>
				<tr>
					<th>Size</th>
					<td class="new_value">
						<div class="form-group">
							<label for="new size"></label>
							<input type="text"
								   class="form-control" value="<?=$value['Size']; ?>" name="Size" id="" aria-describedby="helpId" placeholder="Revised sizes">
						</div>
					</td>
				</tr>
				<tr>
					<th>Color</th>
					<td class="new_value">
						<div class="form-group">
							<label for="new colors"></label>
							<input type="text"
								   class="form-control" value="<?=$value['Color']; ?>" name="Color" id="" aria-describedby="helpId" placeholder="Revised colors">
						</div>
					</td>
				</tr>
				<tr>
					<th>Material</th>
					<td class="new_value">
						<div class="form-group">
							<label for="new material"></label>
							<input type="text"
								   class="form-control" value="<?=$value['Material']; ?>" name="Material" id="" aria-describedby="helpId" placeholder="Revised materials">
						</div>
					</td>
				</tr>
					<tr>
						<th>Description</th>
						<td class="new_value">
							<div class="form-group">
								<label for="new material"></label>
								<input type="text"
									   class="form-control" value="<?=$value['Description']; ?>" name="Description" id="" aria-describedby="helpId" placeholder="Revised materials">
							</div>
						</td>
					</tr>
				<tr>
					<th>Price</th>
					<td class="new_value">
						<div class="form-group">
							<label for="new price"></label>
							<input type="number"
								   class="form-control" value="<?=(int)str_replace('$','',$value['Price']); ?>" name="Price">
						</div>
					</td>
				</tr>
				<tr>
					<th>Origin</th>
					<td class="new_value">
						<div class="form-group">
							<label for="origin"></label>
							<input type="text"
								   class="form-control" value="<?=$value['Origin']; ?>" name="Origin" id="" aria-describedby="helpId" placeholder="Revised origin">
						</div>
					</td>
				</tr>
					<tr>
						<th>Avatar</th>
						<td class="new_value">
							<div class="form-group">
								<label for="avatar">
									<input type="file" name="File">
								</label>
								<label for="avatar">
									<input type="text"
										   class="form-control" name="File" id="" aria-describedby="helpId" value="<?=$value['File']?>" style="width: 250%;">
								</label>

							</div>
						</td>
					</tr>
				<tr>
					<th>Status</th>
					<td class="new_value">
						<div class="form-check form-check-inline">
							<label class="form-check-label" style="margin-right: 30px;">
								<input class="form-check-input" type="radio" name="status" id="status" value="1" <?=$value['Status'] == 1 ? "checked" : "" ?>>In stock
							</label>
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="status" id="status" value="0" <?=$value['Status'] == 1 ? "" : "checked" ?>>Sold out
							</label>
						</div>
					</td>
				</tr>
			<?php endforeach ?>
			</tbody>
		</table>
		</div>
			<div style="text-align: center;">
				<input type="submit" value="Submit Changes" role="button" class="btn btn-dark" style="text-align: center;">
				<a type="button" value="Back" role="button" class="btn btn-dark" style="text-align: center;" href="<?=base_url().'dashboard'?>">Back</a>
			</div>
	</form>
	<?php endforeach; ?>
</div>
</body>
<?php $this->load->view('/common/templates/footer'); ?>
