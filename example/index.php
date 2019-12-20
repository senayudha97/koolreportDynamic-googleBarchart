<?php 
require_once '../vendor/autoload.php';

require_once 'SaleReport.php';

$report = new SaleReport;

$report->run()->render();
 ?>