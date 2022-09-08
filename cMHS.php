<?php
require(“koneksi.php”);
class mahasiswa{
private $koneksi,$nim,$nama,$alamat,$notelp,$jekel,$agama;
private $insert, $update;

public function getNim()
{
return $this->nim;
}
public function setNim($nim)
{
$this->nim=$nim;
}
public function getNama()
{
return $this->nama;
}
public function setNama($nama)
{
$this->nama=$nama;
}
public function getAlamat()
{
return $this->alamat;
}
public function setAlamat($alamat)
{
$this->alamat=$alamat;
}

public function getNotelp()
{
return $this->notelp;
}
public function setNotelp($notelp)
{
$this->notelp=$notelp;
}

public function getJekel()
{
return $this->jekel;
}
public function setJekel($jekel)
{
$this->jekel=$jekel;
}

public function getAgama()
{
return $this->agama;
}
public function setAgama($agama)
{
$this->agama=$agama;
}
public function getTampil()
{
$sql=”SELECT * FROM mhs order by nim asc”;
$koneksi=new database();
$koneksi->koneksiMysql();
$query=mysql_query($sql) or die(“koneksi gagal”);
return $query;
}
public function getInsert(){
$insert=false;
$sql=”INSERT into mhs values(‘”.$this->getNim().”‘, ‘”.$this->getNama().”‘, ‘”.$this->getAlamat().”‘, ‘”.$this->getNotelp().”‘, ‘”.$this->getJekel().”‘, ‘”.$this->getAgama().”‘)”;
$koneksi=new database();
$koneksi->koneksiMysql();
$query=mysql_query($sql) or die(“Koneksi Gagal”);
if ($query){
$insert=true;
}
return $insert;
}
}
?>