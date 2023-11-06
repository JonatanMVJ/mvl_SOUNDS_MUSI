<?php
class categoria
{
	private $categoria;
	private $dbh;

	public function __construct()
	{
		$this->categoria = array();
		$this->dbh = new PDO('mysql:host=localhost;dbname=sonds_music', "root", "");
	}

	private function set_names()
	{
		return $this->dbh->query("SET NAMES 'utf8'");
	}

	public function lista_categoria()
	{
		self::set_names();
		$sql="select * from  platillos ";
		foreach ($this->dbh->query($sql) as $res)
		{
			$this->categoria[]=$res;
		}
		return $this->categoria;
		$this->dbh=null;
	}
}
?>