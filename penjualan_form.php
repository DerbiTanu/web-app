<style type="text/css">
div.ui-datepicker{
 font-size:12px;
}
</style> 

<link href="JQuery/smoothness/jquery-ui-1.10.3.custom.css" rel="stylesheet">

<SCRIPT language=Javascript>

function isNumberKey(evt)
//Membuat validasi hanya untuk input angka menggunakan kode javascript
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))

return false;
return true;
}

function subtotal(jmltxt){
var hitung = (document.getElementById('hrgjualtxt').value * document.getElementById('jmltxt').value);
	document.forms.form1.subtotaltxt.value = hitung;
}

</script>

<script src="JQuery/jquery-ui-1.10.3.custom.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		
	$("#tgl").datepicker({
      showOn: "both", buttonImage: "gambar/calendar.png", buttonImageOnly: true, changeMonth: true, changeYear: true, dateFormat: "dd-mm-yy"});		
	
	function cari_barang_jual(){
		var kode=$("#kdbarangtxt").val();
			if(kode!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_jual.php",
					data:"kode="+kode,
					success:function(data){
					$("#nmbarangtxt").val(data)
					}
				});
			}
			
		var kode1=$("#kdbarangtxt").val();
			if(kode1!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_jual.php",
					data:"kode1="+kode1,
					success:function(data){
					$("#hrgjualtxt").val(data)
					}
				});
			} 
						                                   
	} 
	
	$('#kdbarangtxt').change(function() {
		cari_barang_jual();
		$("#jmltxt").focus()	
    });		
		
})		
</script>

<?php
$sql = "select * from tbltransaksi_jual order by id desc";
$proses = mysql_query($sql);
$record = mysql_fetch_array($proses);
$kode = $record['id']+1;
$tgl = Date("my");
?>

<form id="form1" name="form1" method="post" action="home.php?go=Penjualan_Simpan">
  <table width="700" border="0" align="center">
    <tr>
      <td width="14%" align="left" valign="middle">Kode Barang</td>
      <td width="1%" align="left" valign="middle">:</td>
      <td width="49%" align="left" valign="top"><input name="kdbarangtxt" type="text" id="kdbarangtxt" size="10" maxlength="50" /></td>
      <td width="11%" align="left" valign="middle">No Faktur</td>
      <td width="1%" align="left" valign="middle">:</td>
      <td width="24%" align="left" valign="top"><input name="nofakturtxt" type="text" id="nofakturtxt" value="<?php echo "FJ-$tgl-$kode"?>" size="7" maxlength="50" readonly="readonly" /></td>
    </tr>
    <tr>
      <td align="left" valign="middle">Nama Barang</td>
      <td align="left" valign="middle">:</td>
      <td align="left" valign="top"><input name="nmbarangtxt" type="text" id="nmbarangtxt" size="35" maxlength="50" readonly="readonly" /></td>
      <td align="left" valign="middle">Tanggal</td>
      <td align="left" valign="middle">:</td>
      <td align="left" valign="top"><input name="tgl" type="text" id="tgl" value="<?php echo date('d-m-Y') ?>" size="6" maxlength="10" readonly="readonly" /></td>
    </tr>
    <tr>
      <td align="left" valign="middle">Harga Jual</td>
      <td align="left" valign="middle">:</td>
      <td colspan="4" align="left" valign="top"><input name="hrgjualtxt" type="text" id="hrgjualtxt" size="5" maxlength="15" readonly="readonly" /></td>
    </tr>
    <tr>
      <td align="left" valign="middle">Jumlah</td>
      <td align="left" valign="middle">:</td>
      <td colspan="4" align="left" valign="top"><input name="jmltxt" type="text" id="jmltxt" size="5" maxlength="15" onkeyup="subtotal(this.value,getElementById('jmltxt').value);" onkeypress="return isNumberKey(event)" /></td>
    </tr>
    <tr>
      <td align="left" valign="middle">Sub Total</td>
      <td align="left" valign="middle">:</td>
      <td colspan="4" align="left" valign="top"><input name="subtotaltxt" type="text" id="subtotaltxt" size="5" maxlength="15" readonly="readonly"/></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td colspan="4" align="left" valign="top"><input type="submit" name="tambahbtn" id="tambahbtn" value="Tambah" />
      <input type="submit" name="prosesbtn" id="prosesbtn" value=" Proses " /></td>
    </tr>
    <tr>
      <td colspan="6" align="left" valign="top"><hr /></td>
    </tr>
    <tr>
      <td colspan="6" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="4">
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
$nofaktur ="FJ-$tgl-$kode";
$sql1 = "select * from tbltransaksi_jual_rinci inner join tblbarang on tbltransaksi_jual_rinci.kode_barang = tblbarang.kode_barang where tbltransaksi_jual_rinci.no_faktur ='$nofaktur'";
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
$sql_total = "select sum(sub_total) as gtotal from tbltransaksi_jual_rinci where tbltransaksi_jual_rinci.no_faktur ='$nofaktur'";
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
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td colspan="4" align="left" valign="top">&nbsp;</td>
    </tr>
  </table>
</form>
