<title>Aditya Apriyanti</title>
<form action="proses.php" method="POST" enctype="multipart/form-data">

<table>
<tr>
	<td>NIM</td>
	<td><input type="text" name="nim" required=""></td>
</tr>		
<tr>
	<td>Nama</td>
	<td><input type="text" name="nama" required=""></td>
</tr>
<tr>
	<td>Email</td>
	<td><input type="Email" name="email" value="@gmail.com" required=""></td>
</tr>
	<tr>
	<td></td>
	<td><input type="submit" name="submit" value="submit" ></td>
</tr>
</table>
	</form>
<?php
if (isset($_POST['submit'])) {
   $nim=$_POST['nim'];
   $nama=$_POST['nama'];
   $email=$_POST['email'];

   $Error = array();
   if (strlen($_POST['nim'])<=10) {
   	$error['nim']=="nim harus 10";
   }if(strlen($_POST['nama'])<=25){
   	$error['nama']=="nama harus 25";
   }if (empty($email)) {
   	$error['email']=="email tidak boleh kosong";
  
   }
}
?>
