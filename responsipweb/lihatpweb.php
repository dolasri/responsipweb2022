<?php 

echo "<head><title>Dessert Box Yummy</title></head>";
$fp = fopen("dessert.txt", "r");

echo "<table border='0'>";

while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>Nama </td><td>: $pisah[1] </td></tr>";
    echo "<tr><td>Pesanan </td><td>: $pisah[2] </td></tr>";
    echo "<tr><td>Jumlah Pesanan </td><td>: $pisah[3] </td></tr>";
    echo "<tr><td>Alamat </td><td>: $pisah[4] </td></tr>";
    echo "<tr><td><br></td><td><br></td></tr>";
}

echo "</table>";
echo "<a href='tampilanpweb.php'> Pesanan Dessert Box Yummy Anda </a>";

?>


    
    
    
    
    



