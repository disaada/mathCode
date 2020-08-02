<form method="POST" action="deretPrima.php">
	<input type="text" name="angka" placeholder="Jumlah deret">
	<input type="submit" value="Cek" name="">
</form>
<?php
$angka = isset($_POST['angka']) ? $_POST['angka'] : "";

for($x = 1 ; $x <= $angka ; $x++) {

	echo "$x : ";

	if($x == 2 || $x == 3){

		echo "ini bilangan prima </br>";

		continue;

	} else {

		if($x % 2 != 0 && $x % 3 != 0 && $x != 1) {
			echo "ini bilangan prima </br>";
		} else {
			echo "bukan </br>";
		}

	}
	
}
?>
