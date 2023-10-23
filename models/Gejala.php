<?php 

class Gejala{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }

    //mengambil dan melihat tabel jenis_produk
    public function dataGejala(){
    $sql = "SELECT k.id, k.nama_kategori, k.deskripsi, u.nama AS nama_user
    FROM kategori k
    Join user u ON k.user_id = u.id";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute();
    $rs = $ps->fetchAll();
    return $rs;
}
}

?>