<?php
require(“cMhs.php”);
$nim=$_POST[‘nim’];
$nama=$_POST[‘nama’];
$alamat=$_POST[‘alamat’];
$notelp=$_POST[‘notelp’];
$jekel=$_POST[‘jekel’];
$agama=$_POST[‘agama’];

$mhs=new mahasiswa();
$mhs->setNim($nim);
$mhs->setNama($nama);
$mhs->setAlamat($alamat);
$mhs->setNotelp($notelp);
$mhs->setJekel($jekel);
$mhs->setAgama($agama);

$hasil=$mhs->getInsert();
if($hasil){
echo'<script>alert(“DATA TERASIMPAN”);
document.location=”tampil.php”;</script>’;
}
else{
echo'<script>alert(“GAGAL”);
document.location=”inputmhs.php”;</script>’;
}
?>