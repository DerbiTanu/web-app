<form id="form1" name="form1" method="post" action="home.php?go=Pengguna_Ubah_Password_Simpan">
  <table width="450" border="0" align="center">
    <tr>
      <td width="28%" align="left" valign="middle">Password Lama</td>
      <td width="2%" align="left" valign="middle">:</td>
      <td width="70%" align="left" valign="top"><label></label>
        <label></label>
        <label>
          <input name="pswlamatxt" type="password" id="pswlamatxt" maxlength="10" />
        </label></td>
    </tr>
    <tr>
      <td align="left" valign="middle">Password Baru</td>
      <td align="left" valign="middle">:</td>
      <td align="left" valign="top"><label for="pswbarutxt"></label>
      <input name="pswbarutxt" type="password" id="pswbarutxt" maxlength="10" />
      &nbsp;<span class="Font_Info_Psw">*Maksimal 10 karakter</span></span></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><label>
        <input type="submit" name="Submit" value="Ubah" />
      </label>
        </span></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><input name="usertxt" type="text" value="<?php echo $data['user'] ?>" id="usertxt"
        hidden="true" /></td>
    </tr>
  </table>
</form>
