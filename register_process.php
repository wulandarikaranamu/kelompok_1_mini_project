<?php
// Buat koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "cek_kes";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Tangkap data dari form registrasi
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = "user"; // Anda bisa menambahkan logika peran (role) sesuai kebutuhan

// Simpan data ke tabel User
$query = "INSERT INTO User (nama, umur, jenis_kelamin, email, password, role) VALUES ('$nama', '$umur', '$jenis_kelamin', '$email', '$password', '$role')";

if ($conn->query($query) === TRUE) {
    // Pendaftaran berhasil, arahkan ke halaman login
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
