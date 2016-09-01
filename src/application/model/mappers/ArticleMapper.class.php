<?php 

class ArticleMapper
{
	private $dbTable;
	protected $dbTableClass = 'ArticleDbTable';
	protected $entityClass = 'Article';

	function __construct()
	{
		$this->dbTable = new $dbTableClass;
		$this->db = Registry::get('db');
	}

	public function find($id_article)
	{
		$sql = 'SELECT * FROM ' . $this->dbTable->getTableName() . ' WHERE ' . $this->dbTable->getPrimary() . ' = :id';
		$stmt = $this->db->prepare($sql);
		$stmt->execute(array(':id' => (int) $id_article));
		$stmt->setFetchMode(PDO::FETCH_ASSOC);

		$res = $stmt->fetch();

		$article = new {$this->entityClass};
		$article->setId($res['id']);
		$article->setTitle($res['title']);
		$article->setContent($res['content']);

		return $article;
	}
}