<a href="editprofil.php">Edit profil</a><br>
<a href="posting.php">Post cerita </a></br>
<a href="daftarpostingan.php">Daftar Post </a></br>
<a href="semuaposting.php">Semua posting </a></br>

<?php
include "conn.php";
$query=mysqli_query($con,"SELECT * FROM data");

$no=1;
foreach ($query as $datadiri ) {

	$no++;
}
?>
<?php echo "Nama : ";
echo $datadiri["nama"];?><br>
<?php echo "Nim : ";
echo $datadiri["nim"];?><br>
<?php echo "kelas : ";
echo $datadiri["kelas"];?><br>
<?php echo "Jenis Kelamin : ";
echo $datadiri["gender"];?><br>
<?php echo "Fakultass : ";
echo $datadiri["Fakultas"];?><br>
<?php echo "Hobi : ";
echo $datadiri["hobi"];?><br>
<?php echo "Alamat : ";
echo $datadiri["alamat"];?><br>
