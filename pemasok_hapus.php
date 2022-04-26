<?php
$sql = "DELETE from tblpemasok where id ='$_GET[id]'";
$proses = mysql_query($sql);
	if ($proses) {
		echo "<script>alert('Penghapusan data pemasok berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Pemasok'>";
	} else { 
		echo "<script>alert('Penghapusan data pemasok tidak berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Pemasok'>";
	}
?>
