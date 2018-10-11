<form method="POST" >
	<center>
		<body background="no.jpg">
	<table border="1" bgcolor="#d8f9ff">

			
		
<tr ><td height="30"></td></tr>
<tr>
 <td height="52" colspan="3" bgcolor="#ff6699"><center>FORM DATA</center>
 </td></tr>
 <tr>
		 	<td height ="20" width="2px" colspan="2" bgcolor="#7FFFD4"> Jenis Kelamin <input type="radio" name="gender" value="male"> Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other
</td></tr>
<tr>
 	<td height ="20" width="2px" colspan="2" bgcolor="#7FFFD4">Hobi
  <input type="checkbox" name="hobi" value="Otomotif">Otomotif
 <input type="checkbox" name="hobi" value="Olahraga">Olahraga
 <input type="checkbox" name="hobi" value="Seni">Seni
</td>
	</tr>


			<tr bgcolor="#fcf5b8">
	<td>Nim	:</td>
	<td><input type="text" name="nim" minlength="10" maxlength="10" required=""></td>
		</tr>
		<tr bgcolor="pink">
	<td>Nama	:</td>
	<td><input type="text" name="nama" maxlength="35" required=""></td>
		</tr>
		<tr>
		<td>Username	:</td>
	<td><input type="text" name="username" maxlength="35" required=""></td>
		</tr>
		<tr>
		<td>Password	:</td>
	<td><input type="text" name="pass" maxlength="35" required=""></td>
		</tr>
		<tr>
			 <td>
		Fakultas</td><td height="52" colspan="3" bgcolor="#ff6699"> <select name="Fakultas">
				<option value="FTE">Fakultas Teknik Elektro</option>
				<option value="FIT">Fakultas Ilmu Terapan</option>
				<option value="FEB">Fakultas Ekonomi dan Bisnis</option>
				<option value="FKB">Fakultas Komunikasi dan Bisnis</option>
				<option value="FIK">Fakultas Industri Kreatif</option>
				<option value="FRI">Fakultas Rekayasa Industri</option>
				<option value="IF">Fakultas Informatika</option>
				</select> 
</td>
				<tr>

<td> Kelas </td>
<td height="52" colspan="3" bgcolor="#ff6699">
	<input type="radio" name="kelas" value="D3MI41-01">D3MI41-01
		<input type="radio" name="kelas" value="D3MI41-02">D3MI41-02
			<input type="radio" name="kelas" value="D3MI41-03">D3MI41-03
				<input type="radio" name="kelas" value="D3MI41-04">D3MI4104
			</td>
		</tr>


</select>
</td>
</tr>


<tr>
	<td>Alamat 
		<input type="textarea" name="alamat"></td>
		<tr>
		<tr bgcolor="#fcf5b8">
	<td><input type="Submit" name="submit" value="Submit"></td>
		</tr>
	</table>
</center>
</form>
<?php
	include 'conn.php';
	$servername = "localhost";
	$nim ="root";
	$nama= "";
	$db="tata";
	if($con==false){
		die("Koneksi Gagal" .$con->connect_error);
	}
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$jenis = $_POST['gender'];
		$fakultas = $_POST['Fakultas'];
		$hobi = $_POST['hobi'];
		$kelas = $_POST['kelas'];
		$alamat = $_POST['alamat'];
		$user=$_POST['username'];
		$psw=$_POST['pass'];
		
		$sql = "INSERT INTO data (nim,nama,gender,Fakultas,hobi,kelas,alamat,username,pass) VALUES('$nim','$nama','$jenis','$fakultas','$hobi','$kelas','$alamat','$user','$psw')";
		
		if (mysqli_query($con,$sql)) {
			echo "DATABASE SUDAH MASUK ";
		}else {
			echo "ERROR";
	
		}
		header('location:login.php');
	}

	
?>


