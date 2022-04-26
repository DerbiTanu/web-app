<?php
if(!$_POST['kdbarangtxt'] || !$_POST['nmbarangtxt'] || !$_POST['kelompoklst'] || !$_POST['hrgbelitxt'] || !$_POST['hrgjualtxt'] || !$_POST['stocktxt']){
	echo "<script>alert('Data tidak boleh ada yang kosong !')</script>";	
	echo "<meta http-equiv='refresh' content='0;home.php?go=Barang_Form'>";		
}else {
	$sql = "INSERT INTO tblbarang(kode_barang,nama_barang,kode_kelompok,harga_beli,harga_jual,stock) VALUES ('$_POST[kdbarangtxt]','$_POST[nmbarangtxt]','$_POST[kelompoklst]','$_POST[hrgbelitxt]','$_POST[hrgjualtxt]','$_POST[stocktxt]')";
	$proses = mysql_query($sql);
	if ($proses) {
		echo "<script>alert('Penyimpanan data barang berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Barang'>";
	} else { 
		echo "<script>alert('Penyimpanan data barang tidak berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Barang'>";
	}
}
?>