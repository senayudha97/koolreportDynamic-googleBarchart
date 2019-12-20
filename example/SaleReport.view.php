<!DOCTYPE html>
<html>
<head>
	<title>Top 10</title>
</head>
<body>
<h1>
	Simulasi Chart dengan Mysql
</h1>
<?php 
\koolreport\widgets\google\BarChart::create(array(
	"dataSource"=>$this->dataStore("result")
));
 ?>

<?php 
\koolreport\widgets\koolphp\Table::create(array(
	"dataSource"=>$this->dataStore("result")
));
 ?>
</body>
</html>