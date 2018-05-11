<?php
class Koneksi{
  private $server="localhost";
  private $username="id4972580_def";
  private $password = "admin";
  private $db = "id4972580_data_mahasiswa";
  private $hubungan;

  function ambilKoneksi(){
    $hubungan= new mysqli($this ->server, $this->username,
    $this->password, $this->db);
    return $hubungan;
  }
}
 ?>
