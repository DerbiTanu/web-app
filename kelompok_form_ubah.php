<?php
$sql = "select * from tblkelompok where id ='$_GET[id]'";
$proses = mysql_query($sql);
$record = mysql_fetch_array($proses);
?>
<form id="form1" name="form1" method="post" action="home.php?go=Kelompok_Ubah">
  <table width="400" border="0" align="center">
    <tr>
      <td width="30%" align="left" valign="middle">Kode Kelompok</td>
      <td width="2%" align="left" valign="middle">:</td>
      <td width="68%" align="left" valign="top"><input name="kdkelompoktxt" type="text" id="kdkelompoktxt" value="<?php echo $record['kode_kelompok'] ?>" size="5" maxlength="50" readonly="readonly" /></td>
    </tr>
    <tr>
      <td align="left" valign="middle">Nama Kelompok</td>
      <td align="left" valign="middle">:</td>
      <td align="left" valign="top"><input name="nmkelompoktxt" type="text" id="nmkelompoktxt" size="35" maxlength="50" value="<?php echo $record['nama_kelompok'] ?>" /></td>
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
