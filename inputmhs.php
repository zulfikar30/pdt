<style>
#input_form{
background:#transparent;
border:1px solid #ccc;
margin:auto;
width:510px;
padding:6px;
border-radius:3px;
border-bottom:4px solid #444;
}
.texbox{
height:30px;
border:1px solid #ccc;
}
</style>
<script type=”text/javascript”>
function HanyaAngka(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))
return false;
return true;
}
</script>
<div id=”input_form”>
<h3 align=”center”>INPUT DATA MAHASISWA</h3>
<form action=”simpan_mhs.php” method=”POST”>
<table>
<tr><td>Nim :</td><td><input type=”text” name=”nim” id=”nim” class=”texbox” size=”25px” placeholder=”Masukkan Nim” required=”required” ></td></tr>
<tr><td>Nama :</td><td><input type=”text” name=”nama” id=”nama” class=”texbox” size=”25px” placeholder=”Masukkan Nama” required=”required”></td></tr>
<tr><td>Alamat :</td><td><textarea cols=”45″ rows=”7″ name=”alamat” class=”texarea” id=”alamat” size=”15px” placeholder=”Masukkan Alamat” required=”required”></textarea></td></tr>
<tr><td>Telepon :</td><td><input type=”text” name=”notelp” id=”telp” class=”texbox” size=”25px” placeholder=”No Telepon” required=”required” maxlength=”12″ onKeyPress=”return HanyaAngka(event)”></td></tr>
<tr><td>Jenis Kelamin :<td colspan=”2″><input type=”radio” name=”jekel” id=”jekel” class=”” value=”pria” required=”required”>Pria <input type=”radio” name=”jekel” value=”wanita”>Wanita</td></tr>
<tr><td>Agama :<td><select placeholder=”Pilih Agama” name=”agama” id=”agama”>
<option selected=”selected”>–PILIH AGAMA–</option>
<option value=”kristen”>KRISTEN</option>
<option value=”islam”>ISLAM</option>
<option value=”hindu”>HINDU</option>
<option value=”buddha”>BUDDHA</option>
<option value=”konghucu”>KONGHUCU</option>
</td></tr></select>
<tr><td colspan=”2″><input type=”submit” name=”simpan” value=”SIMPAN”><input type=”reset” name=”reset” value=”BATAL”></td></tr>
</table>
</form>
</div>