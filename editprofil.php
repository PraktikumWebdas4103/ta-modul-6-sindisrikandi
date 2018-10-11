<?php
	include 'conn.php';

	session_start();
	$user = $_SESSION['username'];
	$pass = $_SESSION['pass'];

	$sql = "SELECT * FROM data WHERE username = '$user' AND pass = '$pass'";
	$query = mysqli_query($conn, $sql);

	if (mysqli_num_rows($query) > 0) {
		while ($row = mysqli_fetch_assoc($query)) {
?>



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
	<td><input type="text" name="nim" minlength="10" maxlength="10" required=""  value="<?php echo $row['nim']; ?>">></td>
	<span class="red"><?php if(isset($erNim)){ echo $erNim; } ?></span>
		</tr>
		<tr bgcolor="pink">
	<td>Nama	:</td>
	<td><input type="text" name="nama" maxlength="35" required="" <?php echo $row['nama']; ?>">></td>
	<span class="red"><?php if(isset($erNama)){ echo $erNama; } ?></span>
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
		<input type="textarea" name="alamat" value="<?php echo $row['alamat']; ?>">></td>
			<tr>
				<td colspan="3">
					<br>
					<input type="submit" name="update" value="UPDATE" class="submit"><br>
					<span class="red"><b><u><?php if(isset($err)){ echo $err; } ?></b></u></span>
				</td>
		<tr bgcolor="#fcf5b8">
		</tr>
	</table>
</center>
</form>

<?php
				}
			}

			if (isset($_POST['update'])) {
				$nama		= $_POST['nama'];
				$nim		= $_POST['nim'];
				$kelas		= $_POST['kelas'];
				$jenis	= $_POST['gender'];
				$hobi 		= $_POST['hobi'];
				$hobi		= implode(', ', $_POST['hobi']);
				$fakultas	= $_POST['Fakultas'];
				$alamat		= $_POST['alamat'];

				$sql = "UPDATE data
					SET nama = '$nama',
					nim = '$nim',
					kelas = '$kelas',
					gender = '$jenis',
					hobi = '$hobu',
					Fakultas = '$fakultas',
					alamat = '$alamat'
					WHERE nim = '$nim'
				";
				$query = mysqli_query($conn, $sql);

				$update = '';
				if ($query) {
					header("Location: halamanawal.php?update='Data Berhasil Diupdate'");
				}else{
					echo 'Data Gagal Diupdate';
				}
			}
		?>
		</form>