<!DOCTYPE html>


<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Сайт-визитка</title>
		<link rel="stylesheet" type="text/css" href="/css1/style.css" />
	</head>
	<body>
		<header>
		<h2>Сайт-визитка</h2>
		</header>
		<div id="main">
		<nav>
			<div>
				<ul id="menu">
					<li><a href="/">Главная</a></li>
					<li><a href="/portfolio">Обо мне</a></li>
					<li><a href="/contacts">Контакты</a></li>
				</ul>
			</div>
		</nav>
		<aside></aside>
		<article>
			<?php include 'application/views/'.$content_view; ?>
		</article>
		</div>
		<footer><p>&copy;&nbsp;Skillfactory</p></footer>
	</body>
</html>