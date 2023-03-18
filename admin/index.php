<?php
  require('inc/essentials.php');
  require('inc/db_config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login Panel</title>
	<?php require('inc/links.php'); ?>
	<style>
		div.login-form{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			width: 400px;
		}
	</style>
</head>
<body class="bg-light">
    <!--
    	admin username: admin
    	admin password: admin123
    -->
	<div class="login-form text-center rounded bg-white shadow overflow-hidden">
		<form method="POST">
			<h4 class="bg-dark text-white py-3">ADMIN LOGIN</h4>
			<div class="p-4">
				<div class="mb-3">
                    <input name="admin_user" required type="text" class="form-control shadow-none text-center" placeholder="Admin Username">
                </div>
                <div class="mb-4">
                    <input name="admin_pass" required type="password" class="form-control shadow-none text-center" placeholder="Password">
                </div>
                <button name="login" type="submit" class="btn text-white custom-bg shadow-none">LOGIN</button>
			</div>
		</form>
	</div>

	<?php  

      if (isset($_POST["login"])) 
      {
      	$frm_data = filteration($_POST);
      	
      	$query = "SELECT * FROM `admin_cred` WHERE `admin_user`=? AND `admin_pass`=?";
      	$values = [$frm_data['admin_user'],$frm_data['admin_pass']];

      	$res = select($query,$values,"ss");		
      	if($res->num_rows==1){
      		$row = mysqli_fetch_assoc($res);
			session_start();
			$_SESSION['adminLogin'] = true;
			$_SESSION['adminId'] = $row['id_no'];
			redirect('dashboard.php');
      	}      	
      	else{
			alert('error','Login Failed');			
      	}
      }

	?>


	<?php require('inc/scripts.php'); ?>
</body>
</html>