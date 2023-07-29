<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Sederhana</title>
</head>
<body>
	<h2>Aplikasi Perhitungan Aritmatika Sederhana</h2>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label>Nilai 1:</label>
		<input type="number" name="angka1" required><br><br>

		<label>Nilai 2:</label>
		<input type="number" name="angka2" required><br><br>

		<input type="submit" name="tambah" value="Tambah">
		<input type="submit" name="kurang" value="Kurang">
		<input type="submit" name="kali" value="Kali">
		<input type="submit" name="bagi" value="Bagi">
		<input type="submit" name="reset" value="Reset">
	</form>

	<?php 
		if(isset($_POST['tambah'])){
			$angka1 = $_POST['angka1'];
			$angka2 = $_POST['angka2'];
			$hasil = $angka1 + $angka2;

			echo "<h3>Hasil Perhitungan Tambah: " . $hasil . "</h3>";
		}

		if(isset($_POST['kurang'])){
			$angka1 = $_POST['angka1'];
			$angka2 = $_POST['angka2'];
			$hasil = $angka1 - $angka2;

            		echo "<h3>Hasil Perhitungan Kurang: " . $hasil . "</h3>";
		}

		if(isset($_POST['kali'])){
			$angka1 = $_POST['angka1'];
			$angka2 = $_POST['angka2'];
			$hasil = $angka1 * $angka2;

			echo "<h3>Hasil Perhitungan Kali: " . $hasil . "</h3>";
		}

		if(isset($_POST['bagi'])){
			$angka1 = $_POST['angka1'];
			$angka2 = $_POST['angka2'];
			$hasil = $angka1 / $angka2;

			echo "<h3>Hasil Perhitungan Bagi: " . $hasil . "</h3>";
		}

		if(isset($_POST['reset'])){
			echo "<h3>Hasil:</h3>";
		}
	?>
</body>
</html>