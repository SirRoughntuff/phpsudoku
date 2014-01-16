<?php
$key = array();
$answer = array();
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sudoku prototüüp</title>
	<style type="text/css">
	input[type=text] {width:12pt; text-align:center;}
	</style>
</head>
<body>
	<form action="" method="POST">
	<table border="1">
		<tr>
			<th colspan="9">Sudoku</th>
		</tr>
		<?php
		$row = 1;
		$square_ID = 1;
		while ($row <= 9) {
			echo '<tr>';
			$cell = 1;
			while ($cell <= 9) {
				echo '<td><input type="text" name="square_'.$square_ID.'" autocomplete="off" maxlength="1"></td>';
				$cell++;
				$square_ID++;
			}
			echo '</tr>';
		$row++;
		}
		?>
		<tr>
			<td colspan="9">
				<p>Nupud</p>
			</td>
		</tr>
	</table>
	</form>
</body>
</html>
