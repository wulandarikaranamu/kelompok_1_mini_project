<?php
session_start();
include_once 'koneksi.php';
include_once 'models/Member.php';

$uname = $_POST['email'];
$password = $_POST['password'];
$data = [
    $uname, $password
];
$obj = new Member();
$rs = $obj->cekLogin($data);

if(!empty($rs)){
    $_SESSION['admin'] = $rs;
    header('Location: admin/index.php?url=kategori');
}else{
    $_SESSION['user'] = $rs;
    header('Location: user/index.php?url=kategori');
}
?>