<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Perhitungan Nilai Kelulusan</title>
</head>
<body>
	<h2>Aplikasi Perhitungan Nilai Kelulusan</h2>
	<form method="post" action="hasil.php">
		<label>NPM</label>
        <br>
		<input type="text" name="npm" required><br><br>

		<label>Nama Lengkap</label>
        <br>
		<input type="text" name="nama" required><br><br>

		<label>Jurusan</label>
        <br>
		<select name="Jurusan" id="jurusan">
            <option value="pilih">-Pilih Jurusan-</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
        </select><br>
		<br>
		<label>Nilai Absen</label>
        <br>
        <input type="number" name="absen" min="0" max="100" required><br><br>

		<label>Nilai Tugas</label>
        <br>
		<input type="number" name="tugas" min="0" max="100" required><br><br>

		<label>Nilai UTS</label>
        <br>
		<input type="number" name="uts" min="0" max="100" required><br><br>

		<label>Nilai UAS</label>
        <br>
		<input type="number" name="uas" min="0" max="100" required><br><br>

		<input type="submit" name="proses" value="Proses">
        <input type="reset" name="reset" value="Reset">
	</form>
</body>
</html>