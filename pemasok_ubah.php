<?php
if(!$_POST['kdpemasoktxt'] || !$_POST['nmpemasoktxt'] || !$_POST['almtxt']){
	echo "<script>alert('Data tidak boleh ada yang kosong !')</script>";	
	echo "<meta http-equiv='refresh' content='0;home.php?go=Pemasok'>";		
}else{
$sql = "UPDATE tblpemasok set nama_pemasok = '$_POST[nmpemasoktxt]', alamat = '$_POST[almtxt]' where kode_pemasok = '$_POST[kdpemasoktxt]'";
$proses = mysql_query($sql);
	if ($proses) {
		echo "<script>alert('Pengubahan data pemasok berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Pemasok'>";
	} else { 
		echo "<script>alert('Pengubahan data pemasok tidak berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Pemasok'>";
	}
}
?>