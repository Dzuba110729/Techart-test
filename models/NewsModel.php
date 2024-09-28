<?php
class NewsModel
{
	private $db;

	public function __construct()
	{
		$this->db = dbConnect(); // Подключение к базе данных
	}

	public function getNews($page)
	{
		$offset = ($page - 1) * 4;
		$query = "SELECT * FROM news ORDER BY date DESC LIMIT 4 OFFSET ?";
		$stmt = $this->db->prepare($query);
		$stmt->bind_param("i", $offset);
		$stmt->execute();
		$result = $stmt->get_result();
		return $result->fetch_all(MYSQLI_ASSOC);
	}

	public function getNewsById($news_id)
	{
		$query = "SELECT * FROM news WHERE id = ?";
		$stmt = $this->db->prepare($query);
		$stmt->bind_param("i", $news_id);
		$stmt->execute();
		$result = $stmt->get_result();
		return $result->fetch_assoc();
	}

	public function getLastNews()
	{
		$query = "SELECT * FROM news ORDER BY date DESC LIMIT 1";
		$result = $this->db->query($query);
		return $result->fetch_assoc();
	}

	public function getNewsCount()
	{
		$query = "SELECT COUNT(*) as count FROM news";
		$result = $this->db->query($query);
		return $result->fetch_assoc()['count'];
	}
}
