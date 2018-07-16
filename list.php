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
			for ($b=1; $b <= $i; $b++) { 
				echo "<a href='Test'" . $b .".json>Тест номер " . $b . "</a><br>";
			}
		} else {
			echo "Пока нет загруженных тестов";
		}
	?>
</body>
</html>