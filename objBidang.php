<?php
require_once 'Lingkaran.php';
require_once 'persegiPanjang.php';
require_once 'Segitiga.php';

// ciptakan obj
$lingkaran = new Lingkaran(8);
$persegiPanjang = new PersegiPanjang(10, 15);
$segitiga = new Segitiga(6, 8);

echo "<table border='1'>";
echo "<tr>
        <th>Nama Bidang</th>
        <th>Luas</th>
        <th>Keliling</th>
      </tr>";
echo "<tr>
        <td>" . $lingkaran->namaBidang() . "</td>
        <td>" . $lingkaran->luasBidang() . "</td>
        <td>" . $lingkaran->kelilingBidang() . "</td>
      </tr>";
echo "<tr>
        <td>" . $persegiPanjang->namaBidang() . "</td>
        <td>" . $persegiPanjang->luasBidang() . "</td>
        <td>" . $persegiPanjang->kelilingBidang() . "</td>
      </tr>";
echo "<tr>
        <td>" . $segitiga->namaBidang() . "</td>
        <td>" . $segitiga->luasBidang() . "</td>
        <td>" . $segitiga->kelilingBidang() . "</td>
      </tr>";
echo "</table>";

?>