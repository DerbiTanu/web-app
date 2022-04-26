<SCRIPT language=Javascript>
//Membuat validasi hanya untuk input angka menggunakan kode javascript
function isNumberKey(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))

return false;
return true;
}
</SCRIPT>

<?php
$sql = "select * from tblpemasok where id ='$_GET[id]'";
$proses = mysql_query($sql);
$record = mysql_fetch_array($proses);
?>
<form id="form1" name="form1" method="post" action="home.php?go=Pemasok_Ubah">
  <table width="400" border="0" align="center">
    <tr>
      <td width="30%" align="left" valign="middle">Kode Pemasok</td>
      <td width="2%" align="left" valign="middle">:</td>
      <td width="68%" align="left" valign="top"><input name="kdpemasoktxt" type="text" id="kdpemasoktxt" value="<?php echo $record['kode_pemasok'] ?>" size="5" maxlength="50" readonly="readonly" /></td>
    </tr>
    <tr>
      <td align="left" valign="middle">Nama Pemasok</td>
      <td align="left" valign="middle">:</td>
      <td align="left" valign="top"><input name="nmpemasoktxt" type="text" id="nmpemasoktxt" size="35" maxlength="50" value="<?php echo $record['nama_pemasok'] ?>" /></td>
    </tr>
    <tr>
      <td align="left" valign="middle">Alamat</td>
      <td align="left" valign="middle">:</td>
      <td align="left" valign="top"><label for="kelompoklst">
        <textarea name="almtxt" cols="25" rows="3" id="almtxt"><?php echo $record['alamat'] ?></textarea>
      </label></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><label>
        <input type="submit" name="Submit" value="  Ubah  " />
        </label>
        </span></td>
    </tr>
  </table>
</form>
