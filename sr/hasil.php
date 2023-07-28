<html>

<head>
    <title>RESTORAN</title>
    <div style="background-color:#CCAAFF" padding:50px;>
        <center>
            <p style="color:purple;font-size:50px;font-style:algerian">FAST FOOD</p>
    </div>
</head>
<?php

$nama = $_POST['nama'];
$pesan = $_POST['pesan'];
$jumlah = $_POST['JUMLAH'];

echo " nama :$nama<br>
jumlah : $jumlah<br>
pesanan :$pesan<br>";
if ($pesan === "DIMSUM") {
    $v = 15000;
    $b = $jumlah * 15000;
} elseif ($pesan === "BOBA") {
    $v = 10000;
    $b = $jumlah * 10000;
} elseif ($pesan === "MIE AYAM") {
    $v = 10000;
    $b = $jumlah * 10000;
} elseif ($pesan === "TAKOYAKI") {
    $v = 5000;
    $b = $jumlah * 5000;
} elseif ($pesan === "MILK SHAKE") {
    $v = 5000;
    $b = $jumlah * 5000;
} elseif ($pesan === "RAMEN") {
    $v = 12000;
    $b = $jumlah * 12000;
}
$harga = $v;
echo "harga: $harga<br>";
echo "total: $b<br>";
?>

<script type="text/javascript">
    function Printage() {
        window.print();
    }
</script>

<button id="PrintButton" onclick="Printage()">Print</button>