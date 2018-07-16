<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="/admin.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="MAX_FILE_SIZE" value="30000">
		<input type="file" name="test_file">
		<input type="submit" value="Отправить">
	</form>
</body>
</html>

<?php 
	if (!empty($_FILES) || array_key_exists("test_file", $_FILES)) {
		$fileType = $_FILES['test_file']['type'];

		if ($fileType !== 'application/json') {
			exit('Требуется загрузить json-файл');
		}

		$id = count(scandir('test')) - 1;
		$fileName = 'Test' . $id . '.json';
		move_uploaded_file($_FILES['test_file']['tmp_name'], 'test/'.$fileName);

	} else {
		echo "Файлов не загруженно";
	}
?>



