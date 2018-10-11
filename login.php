<form method="POST"> 
username = <input type="text" name="username">
Pasword =<input type="text" name="pass">

<input type="submit" name="submit" value="Login">
</form>
<?php

if(isset($_POST['submit'])){
	$user =$_POST['username'];
	$psw=$_POST['pass'];


$sql = "SELECT * FROM data where username= '".$user."' and pass='".$psw."'";
$result=mysqli_query($con,$sql);

	if($result){
		$data=mysqli_fetch_row($result);
		session_start();
		$_SESSION['username']=$data[0];
		$_SESSION['pass']=$data[1];
				
	}
       header('location:halamanawal.php');
	}
	
	?>
