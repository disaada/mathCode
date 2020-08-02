<form method="POST" action="deretFibonacci.php">
	<input type="text" name="angka" placeholder="Jumlah deret">
	<input type="submit" value="Cek" name="">
</form>
<?php
$angka = isset($_POST['angka']) ? $_POST['angka'] : "";
$a = 0;
$b = 1;

echo $a . ", " . $b . ", ";

for($x = 3 ; $x <= $angka ; $x++) {

	$hasil = $a + $b;

	$a = $b;

	$b = $hasil;

	echo $hasil . ", ";
	
}
?>
