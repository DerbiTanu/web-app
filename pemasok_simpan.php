<?php
if(!$_POST['kdpemasoktxt'] || !$_POST['nmpemasoktxt'] || !$_POST['almtxt']){
	echo "<script>alert('Data tidak boleh ada yang kosong !')</script>";	
	echo "<meta http-equiv='refresh' content='0;home.php?go=Pemasok_Form'>";		
}else {
	$sql = "INSERT INTO tblpemasok(kode_pemasok,nama_pemasok,alamat) VALUES ('$_POST[kdpemasoktxt]','$_POST[nmpemasoktxt]','$_POST[almtxt]')";
	$proses = mysql_query($sql);
	if ($proses) {
		echo "<script>alert('Penyimpanan data pemasok berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Pemasok'>";
	} else { 
		echo "<script>alert('Penyimpanan data pemasok tidak berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Pemasok'>";
	}
}
?>