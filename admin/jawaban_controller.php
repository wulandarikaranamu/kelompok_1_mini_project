<?php  

include_once '../koneksi.php';
include_once 'models/pertanyaan.php';

$gejala = $_POST['gejala'];
$keluhan = $_POST['keluhan'];
$deskripsi = $_POST['deskripsi'];
$user_id = $_POST['user_id'];
$kategori_id = $_POST['kategori_id'];
$jawaban = $_POST['jawaban'];


$data = [
    $gejala, $keluhan, $deskripsi, $user_id, $kategori_id, $jawaban
];

$model = new Jawaban();
$tombol = $_REQUEST['proses'];

switch ($tombol) {
    case 'save': $model->save($data); break;
    case 'ubah' : $data[] = $_POST['id']; $model->ubah($data); break;
    default:
    header('location:index.php?url=jawaban');
    break;
}

header('location:index.php?url=jawaban');

?>