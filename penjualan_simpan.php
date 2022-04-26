<?php
if(isset($_POST['tambahbtn'])){
	if(!$_POST['kdbarangtxt'] || !$_POST['jmltxt']){
		echo "<script>alert('Data tidak boleh ada yang kosong !')</script>";	
		echo "<meta http-equiv='refresh' content='0;home.php?go=Penjualan_Form'>";		
	}else {
		$sql = "INSERT INTO tbltransaksi_jual_rinci(no_faktur,kode_barang,harga_jual,jumlah,sub_total) VALUES ('$_POST[nofakturtxt]','$_POST[kdbarangtxt]','$_POST[hrgjualtxt]','$_POST[jmltxt]','$_POST[subtotaltxt]')";
		$proses = mysql_query($sql);
		if ($proses) {			
			$sql_update_stok = "UPDATE tblbarang set stock = stock-$_POST[jmltxt] where kode_barang ='$_POST[kdbarangtxt]'";
			$proses_update_stok = mysql_query($sql_update_stok);
			
			echo "<meta http-equiv='refresh' content='0;home.php?go=Penjualan_Form'>";			
		} else { 
			echo "<script>alert('Penyimpanan data penjualan tidak berhasil !')</script>";
			echo "<meta http-equiv='refresh' content='0;home.php?go=Penjualan'>";
		}
	}
}else{
	$sql = "select * from tbltransaksi_jual_rinci where no_faktur ='$_POST[nofakturtxt]'";
	$proses = mysql_query($sql);
	$record = mysql_num_rows($proses);
	if ($record>=1){
				
		$sql_total = "select sum(sub_total) as gtotal from tbltransaksi_jual_rinci where no_faktur ='$_POST[nofakturtxt]'";
		$proses_total = mysql_query($sql_total);
		$record_total= mysql_fetch_assoc($proses_total);
				
		$tgl = substr($_POST['tgl'],6,4)."-".substr($_POST['tgl'],3,2)."-". substr($_POST['tgl'],0,2); 		
		
		$sql1 = "INSERT INTO tbltransaksi_jual(no_faktur,tanggal,total) VALUES ('$_POST[nofakturtxt]','$tgl','$record_total[gtotal]')";
		$proses1 = mysql_query($sql1);
		if ($proses1) {
			echo "<script>alert('Penyimpanan data penjualan berhasil !')</script>";
			echo "<meta http-equiv='refresh' content='0;home.php?go=Penjualan'>";
		} else { 
			echo "<script>alert('Penyimpanan data penjualan tidak berhasil !')</script>";
			echo "<meta http-equiv='refresh' content='0;home.php?go=Penjualan_Form'>";
		}
	}else{
		echo "<script>alert('Belum ada transaksi penjualan rinci !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Penjualan_Form'>";
	}
}	
?>