
<table width="700" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <th colspan="5" align="center" scope="col">TOKO MAXI</th>
  </tr>
  <tr>
    <th colspan="5" align="center" scope="col"><font color="#000000" face="Tahoma, Geneva, sans-serif" size="2"><b>Transaksi Pembelian</b></th>
  </tr>
  <tr>
    <th colspan="5" align="center" scope="col">PERIODE</th>
  </tr>
  <tr>
    <th colspan="5" align="center" scope="col"><b><font color="#990000"><?php echo $_POST['tglmulaitxt'] ?> S/D <?php echo $_POST['tglsampaitxt'] ?></font></b></th>
  </tr>
  <tr>
    <th colspan="5" align="center" scope="col"><hr /></th>
  </tr>
  <tr>
    <th width="7%" align="center" scope="col" bgcolor="#CCCCCC">No</th>
    <th width="23%" align="left" scope="col" bgcolor="#CCCCCC">No Faktur</th>
    <th width="18%" align="left" scope="col" bgcolor="#CCCCCC">Tanggal</th>   
    <th width="36%" align="left" scope="col" bgcolor="#CCCCCC">Pemasok</th>      
    <th width="16%" align="right" scope="col" bgcolor="#CCCCCC">Total</th>
  </tr>

<?php
include "koneksi.php";
$no=1;
$tgl1 = substr($_POST['tglmulaitxt'],6,4)."-".substr($_POST['tglmulaitxt'],3,2)."-". substr($_POST['tglmulaitxt'],0,2); 	
$tgl2 = substr($_POST['tglsampaitxt'],6,4)."-".substr($_POST['tglsampaitxt'],3,2)."-". substr($_POST['tglsampaitxt'],0,2); 	
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

<script language="javascript">
window.print()
</script>
