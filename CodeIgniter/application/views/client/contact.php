<?php $this->load->view('/common/templates/header');?>
<?php
if (isset($_SESSION['msg'])){
	echo $_SESSION['msg'];
	unset($_SESSION['msg']);
}
if (isset($_SESSION['err_msg'])){
	echo $_SESSION['err_msg'];
	unset($_SESSION['err_msg']);
}
?>

<!DOCTYPE html>
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
	<script src="https://kit.fontawesome.com/ba36fe9198.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?= base_url('../assets/css/contact.css') ?>">
</head>
<body>
<div id="contact">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-sm">
				<div><a href="https://goo.gl/maps/AeXBFa4uUzb8CZgw7"><i class="fas fa-map-marker-alt"></i></a></div>
				24 Phan Liem Street, Da Kao Ward, District 1, Ho Chi Minh City, Vietnam
			</div>
			<div class="col-sm">
				<div><a href="tel:+84 1800 1779"><i class="fas fa-phone-square-alt"></i></a></div>
				<div>(+84) 1800 1779</div>
			</div>
			<div class="col-sm">
				<div><a href="mailto:aptech2@aprotrain.com"><i class="fas fa-envelope"></i></a></div>
				aptech2@aprotrain.com
			</div>
		</div>
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.282982943546!2d106.69300631452862!3d10.789624892312572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528cb4ba30aa5%3A0x3a0ddc230888b922!2zMjQgUGhhbiBMacOqbSwgxJBhIEthbywgUXXhuq1uIDEsIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1576994402735!5m2!1sen!2s" width="1110" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
		<div class="contact-form">
			<h4 style="text-align: center ; margin-top: 30px">GET IN TOUCH</h4>
			<hr>
			<form action="<?=base_url()?>contact/index" method="post">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-3">
							YOUR NAME
							<div>
								<input name="name" type="text">
								<span class="text-danger" ><?php echo form_error('name'); ?></span>
							</div>
						</div>
						<div class="col-3">
							EMAIL
							<div>
								<input name="email" type="email">
								<span class="text-danger" ><?php echo form_error('email'); ?></span>
							</div>
						</div>
						<div class="col-3">
							SUBJECT
							<div>
								<input name="subject" type="text">
								<span class="text-danger" ><?php echo form_error('subject'); ?></span>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-9">
							MESSAGE
							<div  class="input-mess">
								<textarea name="mess" class="userInput"></textarea>
								<span class="text-danger" ><?php echo form_error('mess'); ?></span>
								<input style="margin-top: 20px" class="btn btn-secondary" type="submit" value="Send">
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>

<?php $this->load->view('/common/templates/footer'); ?>

