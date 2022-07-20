<?php 

$nama = $_POST['nama'];
$pesanan = $_POST['pesanan'];
$number = $_POST['number'];
$alamat = $_POST['alamat'];

echo "<head><title>Dessert Box Yummy</title></head>";
$fp = fopen("dessert.txt", "a+");
fputs($fp, "|   $nama  |     $pesanan     |     $number    |     $alamat    |\n");
fclose($fp);

echo "Terima Kasih Atas Kunjungannya Selamat Menikmati Dessert Box Yummy <br>";
echo "<a href='tampilanpweb.php'>Isi pesanan</a><br>";
echo "<a href='lihatpweb.php'>tampilan pesanan yang dikirim</a><br>"

 ?>



