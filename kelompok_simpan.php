<?php
if(!$_POST['kdkelompoktxt'] || !$_POST['nmkelompoktxt']){
	echo "<script>alert('Data tidak boleh ada yang kosong !')</script>";	
	echo "<meta http-equiv='refresh' content='0;home.php?go=Kelompok_Form'>";		
}else {
	$sql = "INSERT INTO tblkelompok(kode_kelompok,nama_kelompok) VALUES ('$_POST[kdkelompoktxt]','$_POST[nmkelompoktxt]')";
	$proses = mysql_query($sql);
	if ($proses) {
		echo "<script>alert('Penyimpanan data kelompok berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Kelompok'>";
	} else { 
		echo "<script>alert('Penyimpanan data kelompok tidak berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Kelompok'>";
	}
}
?>