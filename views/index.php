<?php
require_once '../config.php';
require_once '../controllers/NewsController.php';

$newsController = new NewsController();

if (isset($_GET['news_id'])) {
	$newsController->viewNews($_GET['news_id']);
} else {
	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	$newsController->listNews($page);
}
