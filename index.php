<?php
error_reporting(E_ALL & ~E_NOTICE);

require('config.php');
require('Classes/Bootstrap.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();


?>