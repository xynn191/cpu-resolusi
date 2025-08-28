<?php
echo "<h2>Hasil Eksekusi PHP</h2>";
echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse:collapse;'>";

// String dan escape karakter
$nama = "Muhammad Faruq";
echo "<tr><td>String</td><td>$nama berkata \"Katakan namamu!\"</td></tr>";

// Operasi assignment
$a = 3;
$b = 7;
$a += 5;
$b = ($c = 11) + 3;
echo "<tr><td>Assignment</td><td>a = $a, b = $b, c = $c</td></tr>";

// Operasi aritmatika
$a = 10;
$b = 3;
$hasil = "";
$hasil .= "\$a = $a, \$b = $b<br>";
$hasil .= "\$a + \$b = " . ($a + $b) . "<br>";
$hasil .= "\$a - \$b = " . ($a - $b) . "<br>";
$hasil .= "\$a * \$b = " . ($a * $b) . "<br>";
$hasil .= "\$a / \$b = " . ($a / $b) . "<br>";
$hasil .= "\$a % \$b = " . ($a % $b);
echo "<tr><td>Aritmatika</td><td>$hasil</td></tr>";

// Operator logika
$b = 4 != 4;
$c = 3 + 7 == 10;
$logika  = "\$a = (" . ($b and $c) . ") [and]<br>";
$logika .= "\$a = (" . ($b or $c) . ") [or]<br>";
$logika .= "\$a = (" . ($b xor $c) . ") [xor]<br>";
$logika .= "\$a = (" . ((!$b or $c)) . ") [!b or c]<br>";
$logika .= "\$a = (" . ($b && $c) . ") [&&]<br>";
$logika .= "\$a = (" . ($b || $c) . ") [||]";
echo "<tr><td>Logika</td><td>$logika</td></tr>";

// Operator perbandingan
$x = 4;
$perbandingan  = "\$a = " . ($x == 4) . " (x == 4)<br>";
$perbandingan .= "\$b = " . ($x === "4") . " (x === '4')<br>";
$perbandingan .= "\$c = " . ($x != 4) . " (x != 4)<br>";
$perbandingan .= "\$d = " . ($x !== "4") . " (x !== '4')<br>";
$perbandingan .= "\$e = " . ($x < 5) . " (x < 5)<br>";
$perbandingan .= "\$f = " . ($x > 5) . " (x > 5)<br>";
$perbandingan .= "\$g = " . ($x <= 4) . " (x <= 4)<br>";
$perbandingan .= "\$h = " . ($x >= 5) . " (x >= 5)";
echo "<tr><td>Perbandingan</td><td>$perbandingan</td></tr>";

// Percabangan if
$a = 5;
$b = 7;
$ifHasil = "";
if ($a < $b) {
    $ifHasil = "\$a lebih kecil daripada \$b";
}
echo "<tr><td>If Statement</td><td>$ifHasil</td></tr>";

echo "</table>";
?>
