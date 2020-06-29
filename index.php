<?php 
require_once('controllers/BaseController.php');
$task = $_GET['task'];
//$task='list';
$controller = new BaseController();
$controller->$task();
?>