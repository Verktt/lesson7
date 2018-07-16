<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$i = count(scandir('test')) - 2;
		if ($i > 0) {
			echo "<a href='Test'" . $i .".json>Тест номер " . $i . "</a><br>";
		} else {
			echo "Пока нет загруженных тестов";
		}
	?>
</body>
</html>