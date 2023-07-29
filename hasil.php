<!DOCTYPE html>
<html>
<head>
	<title>Hasil Kelulusan</title>
</head>
<body>
	<?php
		$npm = $_POST['npm'];
		$nama = $_POST['nama'];
		$jurusan = $_POST['Jurusan'];
		$absen = $_POST['absen'];
		$tugas = $_POST['tugas'];
		$uts = $_POST['uts'];
		$uas = $_POST['uas'];

		// Menghitung nilai rata-rata
		$nilai_rata = ($absen * 0.1) + ($tugas * 0.2) + ($uts * 0.3) + ($uas * 0.4);

		// Menentukan status kelulusan
		$status = "";
		if ($nilai_rata >= 70) {
			$status = "LULUS";
		} else {
			$status = "TIDAK LULUS";
		}
        // Menampilkan informasi hasil kelulusan
		echo "<h1>Hasil Kelulusan</h1>";
		echo "<table border=1>";
		echo "<tr><td>NPM</td><td>".$npm."</td></tr>";
		echo "<tr><td>Nama Lengkap</td><td>".$nama."</td></tr>";
		echo "<tr><td>Jurusan</td><td>".$jurusan."</td></tr>";
		echo "<tr><td>Nilai Rata-rata</td><td>".$nilai_rata."</td></tr>";
		echo "<tr><td>Status</td><<td>".$status."</td></tr>";
		echo "</table>";
	?>

	<br><br>
	<a href="kelulusan.php">Kembali</a>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    </body>
    </html>