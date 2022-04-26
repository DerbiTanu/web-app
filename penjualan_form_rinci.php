<style type="text/css">
div.ui-datepicker{
 font-size:12px;
}
</style> 

<link href="JQuery/smoothness/jquery-ui-1.10.3.custom.css" rel="stylesheet">

<?php
$sql = "select * from tbltransaksi_jual where no_faktur ='$_GET[id]'";
$proses = mysql_query($sql);
$record = mysql_fetch_array($proses);
$tgl = substr($record['tanggal'],8,2)."-".substr($record['tanggal'],5,2)."-". substr($record['tanggal'],0,4); 	
?>

<form id="form1" name="form1" method="post" action="home.php?go=Penjualan">
  <table width="700" border="0" align="center">
    <tr>
      <td width="12%" align="left" valign="middle">No Faktur</td>
      <td width="1%" align="left" valign="middle">:</td>
      <td width="87%" align="left" valign="top"><input name="nofakturtxt" type="text" id="nofakturtxt" value="<?php echo $record['no_faktur'] ?>" size="7" maxlength="50" readonly="readonly" /></td>
    </tr>
    <tr>
      <td align="left" valign="middle">Tanggal</td>
      <td align="left" valign="middle">:</td>
      <td align="left" valign="top"><input name="tgl" type="text" id="tgl" value="<?php echo $tgl ?>" size="6" maxlength="10" readonly="readonly" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><input type="submit" name="tambahbtn" id="tambahbtn" value="Kembali" /></td>
    </tr>
    <tr>
      <td colspan="3" align="left" valign="top"><hr /></td>
    </tr>
    <tr>
      <td colspan="3" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="4">
        <tr>
          <th width="5%" bgcolor="#CCCCCC" scope="col">No</th>
          <th width="15%" align="left" bgcolor="#CCCCCC" scope="col">Kode Barang</th>
          <th width="43%" align="left" bgcolor="#CCCCCC" scope="col">Nama Barang</th>
          <th width="16%" align="right" bgcolor="#CCCCCC" scope="col">Harga Jual</th>
          <th width="8%" align="center" bgcolor="#CCCCCC" scope="col">Jumlah</th>
          <th width="13%" align="right" bgcolor="#CCCCCC" scope="col">Sub Total</th>
        </tr>
        
<?php
$no=1;
$sql1 = "select * from tbltransaksi_jual_rinci inner join tblbarang on tbltransaksi_jual_rinci.kode_barang = tblbarang.kode_barang where tbltransaksi_jual_rinci.no_faktur ='$record[no_faktur]'";
$proses1 = mysql_query($sql1);
while ($record1 = mysql_fetch_array($proses1))
{
?>   
     
     	<tr>
    	<td align="center" scope="col" bgcolor="#FFFFFF"><?php echo $no ?></td>
    	<td align="left" scope="col" bgcolor="#FFFFFF"><?php echo $record1['kode_barang'] ?></td>
    	<td align="left" scope="col" bgcolor="#FFFFFF"><?php echo $record1['nama_barang']?></td>
    	<td align="right" scope="col" bgcolor="#FFFFFF"><?php echo number_format($record1['harga_jual'], 0, ',','.') ?></td>
    	<td align="center" scope="col" bgcolor="#FFFFFF"><?php echo $record1['jumlah']?></td>
    	<td align="right" scope="col" bgcolor="#FFFFFF"><?php echo number_format($record1['sub_total'], 0, ',','.') ?></td> 
        </tr>
        
<?php $no++;}?> 

<?php
$sql_total = "select sum(sub_total) as gtotal from tbltransaksi_jual_rinci where tbltransaksi_jual_rinci.no_faktur ='$record[no_faktur]'";
$proses_total = mysql_query($sql_total);
$record_total= mysql_fetch_assoc($proses_total);
?>  
   
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <th colspan="2" align="right">Grand Total :</th>
          <td align="right" bgcolor="#FFFF00"><font color="#FF0000"><b><?php echo number_format($record_total['gtotal'], 0, ',','.') ?></b></font></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td colspan="3" align="left" valign="top">&nbsp;</td>
    </tr>
  </table>
</form>
