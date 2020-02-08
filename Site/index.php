<!DOCTYPE html>
<html lang="uk">

<?php
	$title = "Моя особиста сторінка";
	$description = "Мій університетський сайт";
	$keywords = "HTML,CSS,JavaScript,ХПІ,МІТ-87б";
	$author = "Сергій Руденко";

	$mail = "mailto:s1712@tmm-sapr.org";
	$skype = "skype:rudenko_2000?userinfo";
?>

<head>
	
	<title><?php print($title)?></title>
	<link rel="icon" href="Media/favico.png" />

	<meta name="description" content="<?php print($description)?>" />
	<meta name="keywords" content="<?php print($keywords)?>" />
	<meta name="author" content="<?php print($author)?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
	
	<script src="Scripts/Site.js"></script>
	<link href="Styles/Site-classic.css" rel="stylesheet" />
	<link href="Styles/header.css" rel="stylesheet" />

</head>

<body>

	<!-- Start Header -->
	<header id="mu-hero">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light mu-navbar">
				<a class="navbar-brand mu-logo" href="index.php">
					<img class="header-logo" src="Media/favico.png" alt="Лого" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars">☰</span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto mu-navbar-nav">
						<li class="nav-item active">
							<a href="index.php">Головна</a>
						</li>
						<li class="nav-item">
							<a href="project.php">Проект</a>
						</li>
					</ul>
				</div>
			
			</nav>
		</div>
	</header>
	<!-- End Header -->

	<center>

		<h1><?php print($title) ?></h1>
		<img class="header-image" src="Media/favico.png" alt="Фото на якому зображений <?php print($author)?>" title="<?php print($author)?>" />
		<h2><?php print($author)?></h2>

		<!-- Contacts Block -->
		<div class="contacts-block">
			<h2 class="contacts-block-title">Зв'язатися зі мною</h2>
			<div class="container">
				<div class="contacts-item">
					<a href="<?php print($mail)?>">
						<img class="contact-icon" src="Media/Icons/Mail.png" alt="Пошта" title="Пошта" />
						<p>Пошта</p>
					</a>
				</div>
				<div class="contacts-item">
					<a href="<?php print($skype)?>">
						<img class="contact-icon" src="Media/Icons/Skype.png" alt="Скайп" title="Скайп" />
						<p>Скайп</p>
					</a>
				</div>
			</div>
		</div>
		<!-- End Contacts Block -->





	</center>



</body>
</html>