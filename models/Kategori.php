<?php 

class Kategori{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }

    //mengambil dan melihat tabel jenis_produk
    public function dataKategori(){
    $sql = "SELECT k.id, k.nama_kategori, k.deskripsi, u.nama AS nama_user
    FROM kategori k
    Join user u ON k.user_id = u.id";
    //menggunakan mekanisme prepare statement PDO
    $ps = $this->koneksi->prepare($sql);
    $ps->execute();
    $rs = $ps->fetchAll();
    return $rs;
}
}

?>