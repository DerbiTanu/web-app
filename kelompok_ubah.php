<?php
if(!$_POST['nmkelompoktxt']){
	echo "<script>alert('Data tidak boleh ada yang kosong !')</script>";	
	echo "<meta http-equiv='refresh' content='0;home.php?go=Kelompok_Form_Ubah'>";		
}else {
$sql = "UPDATE tblkelompok set nama_kelompok = '$_POST[nmkelompoktxt]' where kode_kelompok = '$_POST[kdkelompoktxt]'";
$proses = mysql_query($sql);
	if ($proses) {
		echo "<script>alert('Pengubahan data kelompok berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Kelompok'>";
	} else { 
		echo "<script>alert('Pengubahan data kelompok tidak berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Kelompok'>";
	}
}
?>