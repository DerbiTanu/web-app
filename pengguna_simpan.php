<?php
if(!$_POST['usertxt'] || !$_POST['pswtxt']){
	echo "<script>alert('Data tidak boleh ada yang kosong !')</script>";	
	echo "<meta http-equiv='refresh' content='0;home.php?go=Pengguna_Form'>";		
}else {
	$sql = "Select * from tblpengguna where user='$_POST[usertxt]'";
	$proses = mysql_query($sql);
	$cari = mysql_num_rows($proses);
	if ($cari==0){
		$password = nl2br($_POST['pswtxt']);
		$password = str_replace("'","&acute;",$password);
		$sql2 = "INSERT INTO tblpengguna (user,password)
		VALUES ('$_POST[usertxt]','" .md5($password). "')";
		$proses2 = mysql_query($sql2);
			if ($proses) {
				echo "<script>alert('Penyimpanan data pengguna berhasil !')</script>";
				echo "<meta http-equiv='refresh' content='0;home.php?go=Pengguna'>";
			} else { 
				echo "<script>alert('Penyimpanan data pengguna tidak berhasil !')</script>";
				echo "<meta http-equiv='refresh' content='0;home.php?go=Pengguna'>";
			}
	}else{
			echo "<script>alert('data pengguna user sudah ada !')</script>";
			echo "<meta http-equiv='refresh' content='0;home.php?go=Pengguna'>";	
	}
}
?>