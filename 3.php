<!--
    operator: memanipulasi nilai dari variable
    +, -, /, *
-->

<?php
$a = 1;
$b = 2;

$jumlah = $a + $b;
$subtotal=10000;
$ongkir = 10000;
$diskon = 10000;

$totalBayar = ($subtotal + $ongkir) - $diskon;
echo "Total Bayar : $totalBayar";
//operator perbandingan : =, ==, ===,!= atau <>, !==, >, <, <=, >=
// operator logic : &&, OR || !
?>