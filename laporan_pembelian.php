<form id="form1" name="form1" method="post" action="laporan_pembelian_cetak.php" target="new">
  <table width="700" border="0" align="center" cellpadding="2" cellspacing="0" bgcolor="#FFFFFF">
    <tr>
      <th width="637" align="left" valign="middle" bgcolor="#8B9CC4" scope="col"><font color="#000000" face="Tahoma, Geneva, sans-serif" size="2"><b>DATA TRANSAKSI PEMBELIAN PERIODE :
        <label for="tglmulaitxt"></label>
        <input name="tglmulaitxt" type="text" id="tglmulaitxt" value="<?php echo $_POST['tglmulai'] ?>" size="10" readonly="readonly" />
 S/D
 <input name="tglsampaitxt" type="text" id="tglsampaitxt" value="<?php echo $_POST['tglsampai'] ?>" size="10" readonly="readonly" /></b></font></th>
  <th width="55" align="right" valign="middle" bgcolor="#8B9CC4" scope="col"><a href="laporan_pembelian_cetak.php"><input type=image img src="Gambar/cetak.png" width="16" height="16" title="Cetak" /></a></th>
  </tr>
</table>
<table width="700" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <th width="7%" align="center" scope="col" bgcolor="#CCCCCC">No</th>
    <th width="23%" align="left" scope="col" bgcolor="#CCCCCC">No Faktur</th>
    <th width="18%" align="left" scope="col" bgcolor="#CCCCCC">Tanggal</th>   
    <th width="36%" align="left" scope="col" bgcolor="#CCCCCC">Pemasok</th>      
    <th width="16%" align="right" scope="col" bgcolor="#CCCCCC">Total</th>
  </tr>

<?php
$no=1;
$tgl1 = substr($_POST['tglmulai'],6,4)."-".substr($_POST['tglmulai'],3,2)."-". substr($_POST['tglmulai'],0,2); 	
$tgl2 = substr($_POST['tglsampai'],6,4)."-".substr($_POST['tglsampai'],3,2)."-". substr($_POST['tglsampai'],0,2); 	
$sql = "select * from tbltransaksi_beli inner join tblpemasok on tbltransaksi_beli.kode_pemasok = tblpemasok.kode_pemasok where tbltransaksi_beli.tanggal >='$tgl1' and tbltransaksi_beli.tanggal <='$tgl2' order by tbltransaksi_beli.id desc";
$proses = mysql_query($sql);
while ($record = mysql_fetch_array($proses))
{
$tgl = substr($record['tanggal'],8,2)."-".substr($record['tanggal'],5,2)."-". substr($record['tanggal'],0,4); 		
?>
  <tr>
    <td align="center" scope="col" bgcolor="#FFFFFF"><?php echo $no ?></td>
    <td align="left" scope="col" bgcolor="#FFFFFF"><?php echo $record['no_faktur'] ?></td>
    <td align="left" scope="col" bgcolor="#FFFFFF"><?php echo $tgl ?></td>
    <td align="left" scope="col" bgcolor="#FFFFFF"><?php echo $record['nama_pemasok'] ?></td>
    <td align="right" scope="col" bgcolor="#FFFFFF"><?php echo number_format($record['total'], 0, ',','.') ?></td>
  </tr>
 <?php $no++;}?>
  
 <?php
$sql_total = "select sum(total) as gtotal from tbltransaksi_beli where tanggal >='$tgl1' and tanggal <='$tgl2' order by id desc";
$proses_total = mysql_query($sql_total);
$record_total= mysql_fetch_assoc($proses_total);
?> 

  <tr>
    <td align="center" scope="col" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="left" scope="col" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="left" scope="col" bgcolor="#FFFFFF">&nbsp;</td>
    <th align="right" scope="col" bgcolor="#FFFFFF">&nbsp;</th>
    <td align="right" scope="col" bgcolor="#FFFFFF"><hr /></td>
  </tr>
  <tr>
    <td align="center" scope="col" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="left" scope="col" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="left" scope="col" bgcolor="#FFFFFF">&nbsp;</td>
    <th align="right" scope="col" bgcolor="#FFFFFF">Grand Total :</th>
    <td align="right" scope="col" bgcolor="#FFFFFF"><font color="#FF0000"><b><?php echo number_format($record_total['gtotal'], 0, ',','.') ?></b></font></td>
  </tr>
</table>
</form>