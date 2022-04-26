<table width="400" border="0" align="center" cellpadding="2" cellspacing="0" bgcolor="#FFFFFF">
<tr>
  <th width="7%" align="left" valign="middle" bgcolor="#8B9CC4" scope="col"><font color="#000000" face="Tahoma, Geneva, sans-serif" size="2"><b>DATA PENGGUNA</b></th>
  <th width="7%" align="right" valign="middle" bgcolor="#8B9CC4" scope="col"><font color="#000000" face="Tahoma, Geneva, sans-serif" size="2"><b><a href="home.php?go=Pengguna_Form"><img src="Gambar/add.png" width="25" height="25" /></a></b></font></th>
</tr>
</table>
<table width="400" border="0" align="center" cellpadding="4" cellspacing="0">
<tr>
<td width="10%" align="center" scope="col"  bgcolor="#CCCCCC"><b>No</b></th>
<td width="50%" align="left" scope="col"  bgcolor="#CCCCCC"><b>User</b></th>
<td width="12%" align="Center" scope="col"  bgcolor="#CCCCCC"><b><font color="#0000FF">Aksi</font></b></th>
</tr>
<?php
$no=1;
$query = "select * from tblpengguna order by id asc";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))
{
?>
<tr>
<td align="center" scope="col" bgcolor="#FFFFFF"><?php echo $no ?></td>
<td align="left" scope="col" bgcolor="#FFFFFF"><?php echo $data['user'] ?></td>
<td align="Center" scope="col" bgcolor="#FFFFFF"><a onclick="return confirm('Yakin data pengguna ini akan di hapus?');" href="?go=Pengguna_Hapus&amp;id=<?php echo $data['id']; ?>"><img src="gambar/hapus.png" width="15" height="15" /></a></td>
</tr>
<?php $no++;} ?>
</table>
