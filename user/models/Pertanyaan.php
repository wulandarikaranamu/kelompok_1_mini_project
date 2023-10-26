<?php 

class Pertanyaan{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }

    //mengambil dan melihat tabel jenis_produk
    public function dataPertanyaan(){
    $sql = "SELECT p.id, p.gejala, p.keluhan, p.deskripsi, u.nama  AS nama_user, k.kategori AS kategori
    FROM pertanyaan p
    INNER JOIN user u ON p.user_id = u.id
    INNER JOIN kategori k ON p.kategori_id = k.id";
    //menggunakan mekanisme prepare statement PDO
    $ps = $this->koneksi->prepare($sql);
    $ps->execute();
    $rs = $ps->fetchAll();
    return $rs;
}
}

?>
