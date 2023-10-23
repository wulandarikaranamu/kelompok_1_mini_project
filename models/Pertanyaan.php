<?php 

class Pertanyaan{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }

    //mengambil dan melihat tabel jenis_produk
    public function dataPertanyaan(){
    $sql = "SELECT p.id, p.hasil_pertanyaan,g.nama_gejala AS nama_gejala
    FROM pertanyaan P
    Join gejala g ON p.gejala_id = g.id";
    //menggunakan mekanisme prepare statement PDO
    $ps = $this->koneksi->prepare($sql);
    $ps->execute();
    $rs = $ps->fetchAll();
    return $rs;
}
}

?>