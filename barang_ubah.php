<?php
if(!$_POST['nmbarangtxt'] || !$_POST['hrgbelitxt'] || !$_POST['hrgjualtxt'] || !$_POST['stocktxt']){
	echo "<script>alert('Data tidak boleh ada yang kosong !')</script>";	
	echo "<meta http-equiv='refresh' content='0;home.php?go=Barang'>";		
}else {
$sql = "UPDATE tblbarang set nama_barang = '$_POST[nmbarangtxt]', kode_kelompok = '$_POST[kelompoklst]', harga_beli = '$_POST[hrgbelitxt]', harga_jual = '$_POST[hrgjualtxt]', stock = '$_POST[stocktxt]'  where kode_barang = '$_POST[kdbarangtxt]'";
$proses = mysql_query($sql);
	if ($proses) {
		echo "<script>alert('Pengubahan data barang berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Barang'>";
	} else { 
		echo "<script>alert('Pengubahan data barang tidak berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Barang'>";
	}
}
?>