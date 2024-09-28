<?php
require_once __DIR__ . '/../models/NewsModel.php';


class NewsController
{
	private $newsModel;

	public function __construct()
	{
		$this->newsModel = new NewsModel();
	}

	public function listNews($page)
	{
		$news = $this->newsModel->getNews($page);
		$lastNews = $this->newsModel->getLastNews();
		$totalNews = $this->newsModel->getNewsCount();
		$totalPages = ceil($totalNews / 4);

		include __DIR__ . '/../views/news_list.php';
	}

	public function viewNews($id)
	{
		$news = $this->newsModel->getNewsById($id);
		include __DIR__ . '/../views/news_detail.php';
	}
}
