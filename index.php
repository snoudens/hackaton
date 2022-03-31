<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<div class="logo"><img class="logo" src="logo-white.png" alt=""></div>
		<div class="space"></div>
		<div class="info">Информация</div>
		<div class="prizes">Награда</div>
		<div class="projects">Темы</div>
		<div class="email_send">Заявка</div>
	</div>


	<div class="information">
		<div class="title_inform">
		<h1>НАПРАВЛЕНИЯ ХАКАТОНА <br>
     	В каких направлениях проекты команд-участников должны быть полезны? </h1>
		</div>
		<div class="blocks_inform">
			<div class="block">1</div>
			<div class="block">2</div>
			<div class="block">3</div>
			<div class="block">4</div>
			<div class="block">5</div>
			<div class="block">6</div>
		</div>
	</div>

	<div class="container">
	<div class="title"><H1>Награждение<br>Победители Хакатона ПГУ</H1></div>
	<div class="main">
		<div class="includes">
			<div class="images"><img class="imgprize" src="1.png" alt=""></div>
			<div class="textprize">Лучший проект</div>
			<div class="prize">50 000 ТЕҢГЕ</div>
		</div>
		<div class="includes">
			<div class="images"><img class="imgprize" src="2.png" alt=""></div>
			<div class="textprize">Лучший функционал</div>
			<div class="prize">30 000 ТЕҢГЕ</div>
		</div>
		<div class="includes">
			<div class="images"><img class="imgprize" src="3.png" alt=""></div>
			<div class="textprize">Лучшая реализация</div>
			<div class="prize">10 000 ТЕҢГЕ</div>
		</div>

	</div>	
	</div>
	

	<div class="send">
		<form action="check.php" method="post">
				<h1>Заполните данные для участия</h1>
				<input type="email" name="email" placeholder="Введите Email" class="form-control">
				<textarea name="message" class="form-control" placeholder="Введите название команды и ФИО участников"></textarea>
				<button type="submit" name="button" class="btn btn-success">Отправить</button>
			</form>
	</div>

</body>
</html>