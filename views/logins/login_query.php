<?php
	session_start();
 
	require_once 'conn.php';
	// print_r($_REQUEST);
	// die();
		if($_POST['username'] != "" && $_POST['password'] != ""){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$sql = "SELECT * FROM `member` WHERE `username`= '$username' AND `password`= '$password'";
			$stmt = $conn->query($sql);
			$stmt->setFetchMode(PDO::FETCH_OBJ);
			$row = $stmt->fetch();
			if(isset($row) && !empty($row)) {
				$_SESSION['user'] = $row;
				header("location: http://localhost/module3/MVC-Casestudy/index.php?controller=product&action=index");
			} else{
				echo "
				<script>alert('Tài khoản hoặc mật khẩu không đúng ')</script>
				<script>window.location = 'index.php'</script>
				";
			}
		}else{
			echo "
				<script>alert('Hãy nhập tài khoản hoặc mật khẩu')</script>
				<script>window.location = 'index.php'</script>
			";
		}
?>