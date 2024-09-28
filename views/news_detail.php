<!DOCTYPE html>
<html>

<head>
	<title><?php echo $news['title']; ?></title>
	<link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>css/fonts.css">
	<link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>css/detail.css">
</head>

<body>
	<header class="header header-detail">
		<div class="container">
			<a href="<?= BASE_URL ?>index.php" class="header-row">
				<img src="<?= BASE_URL ?>images/logo.svg" alt="logo" class="header-logo">
				<p class="header-logo__text">Галактический вестник</p>
			</a>
		</div>
	</header>
	<main>
		<div class="breadcrumbs">
			<div class="container">
				<nav class="breadcrumbs-row">
					<a href="<?= BASE_URL ?>">Главная</a> /
					<span><?php echo $news['title']; ?></span>
				</nav>
			</div>
		</div>
		<section>
			<div class="container">
				<div class="news-detail">
					<h1 class="news-detail__title"><?php echo $news['title']; ?></h1>
					<div class="news-detail__row">
						<div class="news-detail__content">
							<div class="news-item__date"><?php echo date('d.m.Y', strtotime($news['date'])); ?></div>
							<div class="news-detail__subtitle">
								<?php echo $news['announce']; ?>
							</div>
							<div class="news-detail__text"><?php echo $news['content']; ?></div>
							<a href="<?= BASE_URL ?>index.php" class="news-detail__btn">
								назад к новостям
							</a>
						</div>
						<div class="news-detail__img">
							<img src="<?= BASE_URL ?>images/<?php echo $news['image']; ?>" alt="<?php echo $news['title']; ?>">
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<footer class="footer">
		<div class="container">
			<div class="footer-row">
				<p class="footer-config">© 2023 — 2412 «Галактический вестник»</p>
			</div>
		</div>
	</footer>
</body>

</html>