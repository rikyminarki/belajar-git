         <?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$nama=$_POST["nama"];
$email=$_POST["email"];
$subjek=$_POST["subjek"];
$pesan=$_POST["pesan"];

//Query input menginput data kedalam tabel anggota
  $sql="insert into kontak (nama,email,subjek,pesan) values
    ('$nama','$email','$subjek','$pesan')";

//Mengeksekusi/menjalankan query diatas 
  $hasil=mysqli_query($kon,$sql);

//Kondisi apakah berhasil atau tidak
 header("location:index.php");
?>