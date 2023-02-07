<?php
	session_start();
	require_once 'conn.php';
//     echo "<pre>";
//  print_r($_REQUEST);
//  die();
	if(ISSET($_REQUEST)){
		if($_POST['firstname'] != "" && $_POST['lastname'] != "" && $_POST['username'] != "" && $_POST['password'] != ""){
			try{
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$username = $_POST['username'];
				$img = $_FILES['image']['name'];
				$tmp_img = $_FILES['image']['tmp_name'];
				$div = explode('.',$img);
				$file_ext = strtolower(end($div));
				$image= $div[0].time().'.'.$file_ext;
				$path_uploads="../../public/uploads/".$image;
				move_uploaded_file($tmp_img,$path_uploads);
				// md5 encrypted
				// $password = md5($_POST['password']);
				$password = $_POST['password'];
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "INSERT INTO `member`  (`firstname`,`lastname`,`username`,`password`,`image`) 
                 VALUES ('$firstname', '$lastname', '$username', '$password', '$image')";
				$conn->exec($sql);
			}catch(PDOException $e){
				echo $e->getMessage();
			}
			$_SESSION['message']=array("text"=>"User successfully created.","alert"=>"info");
			$conn = null;
			header('location:index.php');
		}else{
			echo "
				<script>alert('Vui lòng nhập tài khoản và mật khẩu!')</script>
				<script>window.location = 'registration.php'</script>
			";
		}
	}
?>