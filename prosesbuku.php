<?php
//koneksi ke mysql
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perpustakaan";
//buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// ambil datta dari form
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun_terbit = $_POST['tahun_terbit'];
$jumlah_halaman = $_POST['jumlah_halaman'];

//query
$sql = "INSERT INTO buku(judul,pengarang,tahun_terbit,jumlah_halaman) VALUES (?,?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssii", $judul, $pengarang, $tahun_terbit, $jumlah_halaman);

if ($stmt->execute()) {
    echo "Data berhasil disimpan!";
} else{
    echo "Error: ".$stmt->error;
}
//Menutup koneksi
$stmt->close();
$conn->close();
?>