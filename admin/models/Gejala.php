<?php 

class Gejala{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }

    //mengambil dan melihat tabel jenis_produk
    public function dataGejala(){
    $sql = "SELECT g.id, g.nama_gejala, g.deskripsi, k.nama_kategori AS nama_kategori
    FROM gejala g
    INNER JOIN kategori k ON g.kategori_id = k.id;";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute();
    $rs = $ps->fetchAll();
    return $rs;
}
}

?>