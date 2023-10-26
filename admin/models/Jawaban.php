
 <?php 

class Jawaban{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }

    //mengambil dan melihat tabel jenis_produk
    public function dataJawaban(){
    $sql = "SELECT
    pertanyaan.id,
    pertanyaan.gejala,
    pertanyaan.keluhan,
    pertanyaan.deskripsi,
    pertanyaan.jawaban,
    user.nama AS nama_user,
    kategori.nama_kategori AS nama_kategori
    FROM
    pertanyaan
    INNER JOIN user ON pertanyaan.user_id = user.id
    INNER JOIN kategori ON pertanyaan.kategori_id = kategori.id";
    //menggunakan mekanisme prepare statement PDO
    $ps = $this->koneksi->prepare($sql);
    $ps->execute();
    $rs = $ps->fetchAll();
    return $rs;
}
public function ubah($data){
    $sql = "UPDATE pertanyaan SET id=?, gejala=?, keluhan=?, deskripsi=?, 
    nama_user=?, kategori_idk=?, jawaban=? WHERE id=?";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute($data);
}

}

?>
