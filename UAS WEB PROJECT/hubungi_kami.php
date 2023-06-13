<?php
// Konfigurasi database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'tourtravel_db';

// Koneksi ke database
$conn = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $noTelepon = $_POST['no_telepon'];
    $pilihanPaket = $_POST['pilihan_paket'];
    $pesan = $_POST['pesan'];

    // Query untuk menyimpan data ke tabel kontak
    $sql = "INSERT INTO kontak (`Nama`, `Email`, `No Telepon`, `Pilihan Paket`, `Pesan`) 
            VALUES ('$nama', '$email', '$noTelepon', '$pilihanPaket', '$pesan')";

if (mysqli_query($conn, $sql)) {
    // Redirect ke halaman hubungikamisukses.html
    header("Location: kontak-sukses.html");
    exit();
    } else {
    echo "Terjadi kesalahan saat menyimpan data: " . mysqli_error($conn);
    }
}
?>