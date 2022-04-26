<?php 

if(!$_POST['pswlamatxt'] || !$_POST['pswbarutxt']){
	echo "<script>alert('Data tidak boleh ada yang kosong !')</script>";	
	echo "<meta http-equiv='refresh' content='0;home.php?go=Pengguna_Ubah_Password_Form'>";		
}else {

$password = nl2br($_POST['pswbarutxt']);
$password= str_replace("'","&acute;",$password);
	
$sql="select * from tblpengguna WHERE user ='".$_SESSION['user']."' and password = '".md5($_POST['pswlamatxt'])."'";
$proses=mysql_query($sql);
$cari = mysql_num_rows($proses);
if ($cari==0){
		echo "<script>alert('Password lama salah !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Pengguna_Ubah_Password_Form'>";
}else{
$sql2 = "UPDATE tblpengguna set password = '".md5($password)."' where user = '".$_SESSION['user']."'";
$proses2 = mysql_query($sql2);
	if ($proses2) {
		echo "<script>alert('Perubahan password berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Home'>";
	} else { 		
		echo "<script>alert('Perubahan password tidak berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Home'>";
	}
}
}
?>