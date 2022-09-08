<!DOCTYPE html>
<html>
<form method="POST" name="frmpost" action="">
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
<center>
	<table border="1" cellpadding="2" cellspacing="4">
		<?php
		$nama = $_POST['nama'];
		$tgl = $_POST['tgl'];
		$jk = $_POST['jk'];
		$hobi = $_POST['hobi'];

		foreach ($nama as $key => $value) {
			?>

			<tr>
				<td align="center" colspan="2">
					<?php
					echo '<b>Berikut data diri anda</b><br>';?>
				</td>
			</tr>
			<tr>
				<td><?php echo 'Nama'?></td>
				<td><?php echo $nama[$key];?></td>
			</tr>
			<tr>
				<td><?php echo 'Jenis Kelamin';?></td>
				<td><?php echo $jk;?></td>
			</tr>
			<tr>
				<td><?php echo 'Hobi';?></td>
				<td><?php echo $hobi[$key];?></td>
			</tr>
			<?php
		}
		?>
	</table>
</center>
</html>