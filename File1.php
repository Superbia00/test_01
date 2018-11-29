<?php
	require_once "File1.html";
	$name="";
	$surname ="";
	$message ="";
	if (empty($_POST['go'])){
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$message = $_POST['message'];
		if (file_exists('message.txt')) {
			echo "Файл существует";
		 	$fp = fopen('message.txt', 'a+') or die("не удалось открыть файл");
			fwrite($fp, $name);
			fwrite($fp, $surname);
			fwrite($fp, $message);
			fclose($fp);
			echo "<br>",htmlentities(file_get_contents("message.txt"));
		}
		 else {
		    echo "Файл не существует";
		}
	} 
	else {
		echo "Вы ничего не ввели...";
	}
	
?>