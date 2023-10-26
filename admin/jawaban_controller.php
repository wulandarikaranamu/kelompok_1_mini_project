<?php  

include_once '../koneksi.php';
include_once 'models/Jawaban.php.php';

$gejala = $_POST['gejala'];
$keluhan = $_POST['keluhan'];
$deskripsi = $_POST['deskripsi'];
$user_id = $_POST['nama_user'];
$kategori_id = $_POST['nama_kategori'];
$jawaban = $_POST['jawaban'];


$data = [
    $gejala, $keluhan, $deskripsi, $user_id, $kategori_id, $jawaban
];


$obj = new Jawaban();
$tombol = $_REQUEST['proses'];

switch ($tombol) {
    case 'simpan': $model->simpan($data); break;
    case 'ubah' : $data[] = $_POST['id']; $model->ubah($data); break;
    default:
    header('location:index.php?url=jawaban');
    break;
}

header('location:index.php?url=jawaban');

?>