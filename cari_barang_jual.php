<?php error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>

<?php
include "koneksi.php";

$result=mysql_query("SELECT * FROM tblbarang where kode_barang ='$_POST[kode]'");
$found=mysql_num_rows($result);
 
if($found>0){
    $row=mysql_fetch_array($result);{
	echo $row['nama_barang'];
	}
 }else{
    echo "";
 }
 
$result=mysql_query("SELECT * FROM tblbarang where kode_barang ='$_POST[kode1]'");
$found=mysql_num_rows($result);
 
if($found>0){
    $row=mysql_fetch_array($result);{
	echo $row['harga_jual'];
	}
 }else{
    echo "";
 } 
?>