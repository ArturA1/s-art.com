<?php 
	error_reporting(0);
	require_once 'connect.php';
	global $id;
	global $id_i;
	$key="1ab549775912f1a77d6738bffb54c47256ec49d48f57d842480e778303ebd9af76e3ccb6bc5ce793";
	$method = "AES-192-CBC";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css" media="all">
	<title>Тест мессенджер</title>
</head>
<body>
<form method="POST" onsubmit="call()">
	<div class="wrappen">
		<div class="mess">
			<div class="mess_scroll">
			<div class="mess_content">
				<div style="margin-bottom: 16px"></div>
				<?php foreach ($mess as $k => $value):
					$content = openssl_decrypt($value['content'], $method, $key);
					?>
					<div class="container_content">
						<div class="content_name"><?=nl2br(htmlspecialchars($value['name']))?></div>
						<div class="content_box">
							<div class="content_box_text">
								<div class="content_text"><?=nl2br(htmlspecialchars($content))?></div>
								<div class="text_time"><?=(explode(":", explode(" ", $value['time'])[1])[0]).':'.(explode(":", explode(" ", $value['time'])[1])[1])?></div>
							</div>
							<button type="submit" class="delete_icon" onclick="countDelete(<?=$value['id']?>)">
								<image src="img/delete.svg">
							</button>
						</div>
					</div>
				<?php endforeach; ?>
				<div style="margin-top: 16px"></div>
			</div>
			</div>
			
				<!-- <div id="input_delete1" name="id_i" style="color:red">0</div> -->
				<input id="input_delete2" name="id_i" type="hidden" value="0">
			
			<div class="mess_input">
				<input type="text" name="query" placeholder="Введите сообщение">
				<button type="submit" class="query_icon">
					<image src="img/query.svg">
				</button>
			</div>
		</div>
		<div class="user">
			<div class="user_title">Введите логин</div>
			<div class="user_name">
				<input type="text" name="user" placeholder="Введите логин">
			</div>
		</div>
	</div>
</form>
	<script src="jq.js"></script>
	<noscript>НЕ РАБОТАЕТ JS</noscript>
</body>
</html>