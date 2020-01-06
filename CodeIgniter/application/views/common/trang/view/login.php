<?php
$usernameErr = $passErr = "";
$username = $pass = "";
$mgs = "";
$mgs1 = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if(!empty($_POST["username"])) {
		$username = $_POST['username'];
	} else {
		$usernameErr = "Username is required";
	}

	//check pass not empty
	if(!empty($_POST["pass"])) {
		$pass = $_POST['pass'];
	} else {
		$passErr = "Password is required";
	}
	if (empty($usernameErr) && empty($passErr)){
		$sql = "SELECT * FROM account join accounttype on account.AccTypeID = accounttype.AccTypeID WHERE Username = '{$username}'";
		$query = $this->db->query($sql);
		$result = $query->row_array();

		if ($result) {
			if ($result["Password"] == $pass) {
				$session_user = [
					'role' => $result['id'],
				];
				// save user to session and go to dashboard
				$_SESSION['user'] = $session_user;
				header("location: http://localhost:8080/CodeIgniter/index.php/dashboard");
			}
			else{
				$mgs = "Wrong Password";
			}
		} else {
			$mgs1 = "Wrong Username or Password";
		}

	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ba36fe9198.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?= base_url('../trang/assets/css/login.css') ?>">
</head>
<body>
<?=@$msg?>
    <form class="container" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		<span><?=$usernameErr?></span>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name="pass" type="password" class="form-control" id="exampleInputPassword1">
		<span><?=$passErr?></span>
    </div>
		<span><?=$mgs?></span>
		<span><?=$mgs1?></span>
		<div><button type="submit" class="btn btn-primary">Submit</button></div>
    </form>
</body>
</html>
