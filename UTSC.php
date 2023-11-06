<?php
$diskon = 0.2;
$produk = [
   ["Baju Bayi", 1, 35500],
   ["Diapers", 3, 51000],
   ["Bedak", 1, 15000],
   ["Minyak Telon", 2, 30000]
];

echo "<table border='1'>";
echo "<tr><th>Nama Produk</th><th>Stok</th><th>Harga</th></tr>";
foreach ($produk as $key => $value) {
   echo "<tr>";
   foreach ($value as $v) {
       echo "<td>$v</td>";
   }
   echo "</tr>";
}
echo "</table>";

$total_pembelian = 0;
foreach ($produk as $value) {
   $total_pembelian += $value[1] * $value[2];
}

$diskon_pembelian = $total_pembelian * $diskon;
$total_pembayaran = $total_pembelian - $diskon_pembelian;

echo "Diskon: " . number_format($diskon_pembelian, 2) . "<br>";
echo "Total Pembayaran: " . number_format($total_pembayaran, 2);
?>