<?php session_start();
include("koneksi.php");
if(!$_POST['usertxt'] || !$_POST['pswtxt']){
	echo "<script>alert('Data tidak boleh ada yang kosong !')</script>";	
	echo "<meta http-equiv='refresh' content='0;index.php'>";		
}else {
	$sql = "Select * from tblpengguna where user='$_POST[usertxt]' And password='".md5($_POST['pswtxt'])."'";
	$proses = mysql_query($sql);
	$data = mysql_fetch_array($proses);
	$login = mysql_num_rows($proses);
	if ($login==0){
		echo "<script>alert('Password Anda salah !')</script>";
		echo "<meta http-equiv='refresh' content='0;index.php'>";
	}else{
		$_SESSION['user'] =$data['user'];
		echo "<meta http-equiv='refresh' content='0;home.php'>";
	}
}
?>