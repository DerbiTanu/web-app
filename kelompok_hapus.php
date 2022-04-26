<?php
$sql = "DELETE from tblkelompok where id ='$_GET[id]'";
$proses = mysql_query($sql);
	if ($proses) {
		echo "<script>alert('Penghapusan data kelompok berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Kelompok'>";
	} else { 
		echo "<script>alert('Penghapusan data kelompok tidak berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Kelompok'>";
	}
?>
