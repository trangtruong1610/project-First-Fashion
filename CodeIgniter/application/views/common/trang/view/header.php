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
	<link rel="stylesheet" href="<?= base_url('../trang/assets/css/header.css') ?>">
    <script src="https://kit.fontawesome.com/ba36fe9198.js" crossorigin="anonymous"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
    <div id="header">
        <div class="logo">
            this is logo
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
                    <a class="nav-link" href="<?=base_url()?>">HOME<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
					<a class="nav-link" href="<?=base_url()?>">ABOUT US<span class="sr-only">(current)</span></a>
				</li>
                <li class="nav-item ">
					<a class="nav-link" href="<?=base_url().'product'?>">PRODUCT<span class="sr-only">(current)</span></a>

				</li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?=base_url().'contact'?>">CONTACT<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?=base_url().'dashboard'?>">DASHBOARD<span class="sr-only">(current)</span></a>
                </li>
				<li class="nav-item active">
                    <a class="nav-link" href="<?=base_url().'login'?>">LOGIN<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
        </nav>
    </div>
</body>
</html>
