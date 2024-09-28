<?php
// Подключаем конфигурацию и контроллеры
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../controllers/NewsController.php';

// Создаем объект контроллера
$newsController = new NewsController();

// Проверяем параметры URL
if (isset($_GET['news_id'])) {
	// Отображаем детальную страницу новости
	$newsController->viewNews($_GET['news_id']);
} else {
	// Отображаем список новостей (по умолчанию первая страница)
	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	$newsController->listNews($page);
}
