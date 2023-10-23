<?php 

class Jawaban{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }

    //mengambil dan melihat tabel jenis_produk
    public function dataJawaban(){
    $sql = "SELECT jawaban.*, user.nama FROM jawaban INNER JOIN user ON jawaban.user_id = user.id";
    
    //menggunakan mekanisme prepare statement PDO
    $ps = $this->koneksi->prepare($sql);
    $ps->execute();
    var_dump($rs = $ps->fetchAll()) ;
    return $rs;
}
}

?>

