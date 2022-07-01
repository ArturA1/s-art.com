<?php 

	$db_host = "127.0.0.1"; 
    $db_user = "root"; // Логин БД
    $db_password = "root"; // Пароль БД
    $db_base = "my_bd"; // Имя БД
    $db_table = "message";
    $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
    // Устанавливаем корректную кодировку
    $db->exec("SET NAMES utf8");
    // Собираем данные для запроса

    if (!empty($_POST['user']) && !empty($_POST['query'])){
    	// Переменные с формы
    	$user = $_POST['user'];
    	$query = $_POST['query'];
    	
    	$key="1ab549775912f1a77d6738bffb54c47256ec49d48f57d842480e778303ebd9af76e3ccb6bc5ce793";
		$method = "AES-192-CBC";
		$query = openssl_encrypt($query, $method, $key);

    	$data = array('name' => $user, 'content' => $query);
    	$query = $db->prepare("INSERT INTO $db_table (name, content) values (:name, :content)"); 
    	$query->execute($data);
    	header("Location: .") ;
		exit();
    }

	if (!empty($_POST['id_i'])){
		$id = $_POST['id_i'];
		$data = array('id' => $id);
		$query = $db->prepare("DELETE FROM message WHERE id = :id");
		$query->execute($data);
		header("Location: .") ;
		exit();
	}
	if (!isset($_POST['name']) && !isset($_POST['content']) && !isset($_POST['time'])){
    	// Переменные с формы
    	$data = array('name' => $name, 'content' => $content, 'time' => $time);
    	$query = $db->prepare("SELECT * FROM message");
		$query->execute($data);
		return $mess = $query->fetchAll();
	}
 ?>