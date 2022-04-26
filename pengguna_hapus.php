<?php
$perintah = "DELETE from tblpengguna  where id ='$_GET[id]'";
$result = mysql_query($perintah);
	if ($result) {
		echo "<script>alert('Data pengguna berhasil di hapus !')</script>";		
		echo "<meta http-equiv='refresh' content='0;home.php?go=Pengguna'>";		
	} else { 
		echo "<script>alert('Data pengguna tidak dapat di hapus !')</script>";	
		echo "<meta http-equiv='refresh' content='0;home.php?go=Pengguna'>";
	}
?>