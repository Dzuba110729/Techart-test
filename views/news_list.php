<!DOCTYPE html>
<html>

<head>
	<title>Галактический
		вестник</title>
	<link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>css/fonts.css">
	<link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>css/style.css">
</head>

<body>
	<header class="header">
		<div class="container">
			<a href="<?= BASE_URL ?>index.php" class="header-row">
				<img src="<?= BASE_URL ?>images/logo.svg" alt="logo" class="header-logo">
				<p class="header-logo__text">Галактический вестник</p>
			</a>
		</div>
	</header>
	<main>
		<section class="news-banner" style="background-image: url('<?= BASE_URL ?>images/<?php echo $lastNews['image']; ?>')">
			<div class="container">
				<div class="news-banner__row">
					<h1 class="news-banner__title"><?php echo $lastNews['title']; ?></h1>
					<p><?php echo $lastNews['announce']; ?></p>
				</div>
			</div>
		</section>
		<section class="news">
			<div class="container">
				<div class="news-row">
					<h2 class="news-row__title">Новости</h2>
					<div class="news-list">
						<?php foreach ($news as $item): ?>
							<a class="news-item" href="<?= BASE_URL ?>index.php?news_id=<?= $item['id']; ?>">
								<div class="news-item__date"><?php echo date('d.m.Y', strtotime($item['date'])); ?></div>
								<h3 class="news-item__title"><?php echo $item['title']; ?></h3>
								<p class="news-item__announce"><?php echo $item['announce']; ?></p>
								<p class="news-item__btn">
									Подробнее
								</p>
							</a>
						<?php endforeach; ?>
					</div>
					<div class="pagination">
						<?php if ($page > 1): ?>
							<a class="pagination-prev pagination-arrow" href="<?= BASE_URL ?>index.php?page=<?= $page - 1; ?>">
								<img src="<?= BASE_URL ?>images/arrow_left.svg" alt="arrow_left">
							</a>
						<?php endif; ?>
						<?php if ($page > 2): ?>
							<a class="pagination__num" href="<?= BASE_URL ?>index.php?page=<?= $page - 2; ?>">
								<?= $page - 2 ?>
							</a>
						<?php endif; ?>
						<?php if ($page > 1): ?>
							<a class="pagination__num" href="<?= BASE_URL ?>index.php?page=<?= $page - 1; ?>">
								<?= $page - 1 ?>
							</a>
						<?php endif; ?>
						<a class="pagination__num pagination__num-cur" href="<?= BASE_URL ?>index.php?page=<?= $page; ?>">
							<?= $page ?>
						</a>
						<?php if ($page < $totalPages): ?>
							<a class="pagination__num" href="<?= BASE_URL ?>index.php?page=<?= $page + 1; ?>">
								<?= $page + 1 ?>
							</a>
						<?php endif; ?>
						<?php if ($page < $totalPages - 1): ?>
							<a class="pagination__num" href="<?= BASE_URL ?>index.php?page=<?= $page + 2; ?>">
								<?= $page + 2 ?>
							</a>
						<?php endif; ?>
						<?php if ($page < $totalPages): ?>
							<a class="pagination-next pagination-arrow" href="<?= BASE_URL ?>index.php?page=<?= $page + 1; ?>">
								<img src="<?= BASE_URL ?>images/arrow_next.svg" alt="arrow_next">
							</a>
						<?php endif; ?>
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