<?php 

class Jawaban{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }

    //mengambil dan melihat tabel jenis_produk
    public function dataJawaban(){
    $sql = "SELECT h.id, p.hasil_pertanyaan AS pertanyaan, h.hasil_jawaban, u.nama AS nama_user
    FROM jawaban h
    INNER JOIN pertanyaan p ON h.pertanyaan_id = p.id
    INNER JOIN user u ON h.user_id = u.id;";
    
    //menggunakan mekanisme prepare statement PDO
    $ps = $this->koneksi->prepare($sql);
    $ps->execute();
    var_dump($rs = $ps->fetchAll()) ;
    return $rs;
}
}

?>

