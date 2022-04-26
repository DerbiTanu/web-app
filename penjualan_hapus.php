<?php
$sql = "DELETE from tbltransaksi_jual_rinci where no_faktur ='$_GET[id]'";
$proses = mysql_query($sql);

$sql = "DELETE from tbltransaksi_jual where no_faktur ='$_GET[id]'";
$proses = mysql_query($sql);

	if ($proses) {
		echo "<script>alert('Penghapusan data transaksi jual berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Penjualan'>";
	} else { 
		echo "<script>alert('Penghapusan data transaksi jual tidak berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Penjualan'>";
	}
?>
