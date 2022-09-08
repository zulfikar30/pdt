<!DOCTYPE html>
<html>
<form method="POST" name="frmpost" action="">
	<form action="data.php" method="POST" class="form-bg" enctype="multipart">
	<table align="Center" border="1" cellpadding="0" cellspacing="0">
		<tr align="Center"><td><h2><b>INPUT DATA DIRI</b></h2></td></tr>
		<tr>
			<td>NAMA</td>
			<td> : </td>
			<td><input name="nama[]" type="text" size="40"/></td>
		</tr>
		<tr>
			<td>Tempat Tgl lahir</td>
			<td> : </td>
			<td><input name="tgl[]" type="text" size="40"/></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td> : </td>
			<td>
				<input type="radio" name="jk" value="Laki - laki"><label for="laki">Laki -laki</label>
				<input type="radio" name="jk" value="Perempuan"><label for="Perempuan">Perempuan</label>
			</td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td> : </td>
			<td><input name="hobi[]" type="text" size="40"/></td>
		</tr>
		<tr>
			<td colspan="4" align="center"><input type="submit" name="btnOK" value="Simpan"/></td>
		</tr>
	</table>
</td>
</tr>
</table>
</form>
</html>