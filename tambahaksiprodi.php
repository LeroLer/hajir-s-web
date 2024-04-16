<?php
require 'koneksi.php';

$prodi = $_POST['namaprodi'];

// echo 'nama prodinya adalah: ' . $prodi ;

// Menggunakan placeholder untuk nama tabel
$query = "INSERT INTO prodi (nama_prodi) VALUES ('$prodi')";

if (mysqli_query($conn, $query)) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>