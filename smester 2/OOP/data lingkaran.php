<?php
require_once "class lingkaran.php"
echo "nilai PHI : ".lingkaran::PHI.;
$lingkar1 = new lingkaran (10);
$lingkar2 = new lingkaran (4);

echo "<hr/>luas lingkaran I".$lingkar1->getluas();
echo "<hr/>luas lingkaran II".$lingkar2->getluas();

echo "keliling linkaran I".$lingkar1->getkeliling();
echo "<hr/>keliling Lingkaran II".$lingkar2->getkelilng();
?>