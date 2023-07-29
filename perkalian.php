<!DOCTYPE html>
<html>
<head>
	<style>
		table {
			border-collapse: collapse;
		}

		table, th, td {
			border: 1px solid black;
			padding: 15px;
		}
	</style>
</head>
<body>
	<h1>Perkalian Bilangan 1 - 10</h1>

	<table>
		<?php
			// Melakukan perkalian dan menampilkan hasil dalam baris
			for ($i = 1; $i <= 2; $i++) {
				echo "<tr>";
				for ($j = 1; $j <= 5; $j++) {
					echo "<td>";
					$number = ($i - 1) * 5 + $j;
					for ($k = 1; $k <= 10; $k++) {
						$result = $number * $k;
						echo "$number x $k = $result";
						if ($k < 10) {
                            echo "<br>";
						}
					}
					echo "</td>";
				}
				echo "</tr>";
		}
		?>
	</table>
</body>
</html>