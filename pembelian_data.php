<table width="700" border="0" align="center" cellpadding="2" cellspacing="0" bgcolor="#FFFFFF">
<tr>
  <th width="43%" align="left" valign="middle" bgcolor="#8B9CC4" scope="col"><font color="#000000" face="Tahoma, Geneva, sans-serif" size="2"><b>DATA TRANSAKSI PEMBELIAN</b></th>
  <th width="57%" align="right" valign="middle" bgcolor="#8B9CC4" scope="col"><font color="#000000" face="Tahoma, Geneva, sans-serif" size="2"><b><a href="home.php?go=Pembelian_Form"><img src="Gambar/add.png" alt="" width="25" height="25" /></a></b></font></th>
</tr>
</table>
<table width="700" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <th width="10%" align="center" scope="col" bgcolor="#CCCCCC">No</th>
    <th width="17%" align="left" scope="col" bgcolor="#CCCCCC">No Faktur</th>
    <th width="16%" align="left" scope="col" bgcolor="#CCCCCC">Tanggal</th>   
    <th width="34%" align="left" scope="col" bgcolor="#CCCCCC">Pemasok</th>      
    <th width="14%" align="right" scope="col" bgcolor="#CCCCCC">Total</th>
    <th width="9%" align="Center" scope="col" bgcolor="#CCCCCC"><font color="#FFFFFF">Aksi</font></th>
</tr>

<?php
$no=1;
$sql = "select * from tbltransaksi_beli inner join tblpemasok on tbltransaksi_beli.kode_pemasok = tblpemasok.kode_pemasok order by tbltransaksi_beli.id desc";
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
    <td align="Center" scope="col" bgcolor="#FFFFFF"><a href="?go=Pembelian_Form_Rinci&amp;id=<?php echo $record['no_faktur']; ?>" title="Rincian Data" target="_self"><img src="gambar/ubah.png" width="15" height="15" /></a>&nbsp;&nbsp;<a onclick="return confirm('Yakin data pembelian ini akan di hapus?');" href="?go=Pembelian_Hapus&amp;id=<?php echo $record['no_faktur']; ?>"><img src="gambar/hapus.png" width="15" height="15" /></a></td>
  </tr>

<?php $no++;}?>

</table>
