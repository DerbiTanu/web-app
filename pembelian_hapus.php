<?php
$sql = "DELETE from tbltransaksi_beli_rinci where no_faktur ='$_GET[id]'";
$proses = mysql_query($sql);

$sql = "DELETE from tbltransaksi_beli where no_faktur ='$_GET[id]'";
$proses = mysql_query($sql);

	if ($proses) {
		echo "<script>alert('Penghapusan data transaksi beli berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Pembelian'>";
	} else { 
		echo "<script>alert('Penghapusan data transaksi beli tidak berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Pembelian'>";
	}
?>
