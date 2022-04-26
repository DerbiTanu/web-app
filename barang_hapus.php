<?php
$sql = "DELETE from tblbarang where id ='$_GET[id]'";
$proses = mysql_query($sql);
	if ($proses) {
		echo "<script>alert('Penghapusan data barang berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Barang'>";
	} else { 
		echo "<script>alert('Penghapusan data barang tidak berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Barang'>";
	}
?>
