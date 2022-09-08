<style>
#anggota{
background:#transparent;
border:1px solid #ccc;
margin:auto;
width:610px;
padding:4px;
border-radius:3px;
}
.tabel{
border:1px solid #ccc;
}
#tr{
border:1px solid #ccc;
background:#444;
color:fff;
padding:12px;
text-align:center;
}
</style>
<div id=”anggota”>
<p align=”center”>&raquo;DAFTAR NAMA MAHASISWA&laquo;</p>
<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
require(“cMhs.php”);
echo”<table border=’1px’>”;
echo”<tr id=’tr’>”;
echo”<td>Nim</td>”;
echo”<td>Nama</td>”;
echo”<td>Alamat</td>”;
echo”<td>Nomor Telepon</td>”;
echo”<td>Jenis Kelamin</td>”;
echo”<td>Agama</td>”;
echo”<td colspan=’2′>Aksi</td>”;
echo”</tr>”;
$mhs=new mahasiswa;
$tampil=$mhs->getTampil();
while ($row = mysql_fetch_array($tampil))
{
echo “<tr>”;
echo”<td>”.$row[‘nim’].”</td>”;
echo”<td>”.$row[‘nama’].”</td>”;
echo”<td>”.$row[‘alamat’].”</td>”;
echo”<td>”.$row[‘notelp’].”</td>”;
echo”<td>”.$row[‘jekel’].”</td>”;
echo”<td>”.$row[‘agama’].”</td>”;
?>
<td><a href=”edit.php?nim=<?php echo $row[‘nim’];?>”‘ >EDIT</a></td>
<td><a href=”hapus.php?nim=<?php echo $row[‘nim’];?>” onclick=”return confirm (‘Sure to Delete?’)” ” >HAPUS</a></td>
<?php
echo”</tr>”;
}
echo”</table>”;
?>
<br>
<center><a href=”inputmhs.php”>Form Input</a></center>
</div>