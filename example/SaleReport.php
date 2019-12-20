<?php 

/**
 * 
 */
class SaleReport extends \koolreport\KoolReport
{

	use \koolreport\clients\Bootstrap;
	
	protected function settings()
	{
		return array(
			"dataSources"=>array(
				"automaker"=>array(
					"connectionString"=>"mysql:host=localhost;dbname=automaker",
					"username"=>"root",
					"password"=>"",
					"charset"=>"utf8"
				)
			)
		);

	}

	protected function setup()
	{
		$this->src("automaker")
		->query("
			SELECT nama_barang, LENGTH(nama_barang) FROM tb_barang ORDER BY LENGTH(nama_barang) DESC LIMIT 10
			")
		->pipe($this->dataStore("result"));
	}
}


?>