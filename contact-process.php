<?php
include 'Config/db.php'; // pastikan file ini benar dan berisi koneksi

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $pesan = $_POST['pesan'];

  // Cegah SQL injection sederhana
  $nama = mysqli_real_escape_string($conn, $nama);
  $email = mysqli_real_escape_string($conn, $email);
  $pesan = mysqli_real_escape_string($conn, $pesan);

  $sql = "INSERT INTO kontak (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
  
  if (mysqli_query($conn, $sql)) {
    header("Location: contact.php?status=sukses");
  } else {
    echo "Gagal menyimpan pesan: " . mysqli_error($conn);
  }
  exit();
}
?>

