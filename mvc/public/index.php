<?php
define("DS", DIRECTORY_SEPARATOR);
define("ROOT", dirname(__DIR__));
define('APP', ROOT.DS."app");
define('CONTROLLERS', APP.DS."controllers".DS);
define('MODELS', APP.DS."models".DS);
define('CORE', APP.DS."core".DS);
define('VIEWS', APP.DS."views".DS);
define('VENDOR', ROOT.DS."vendor".DS);
define('ASSETS', "http://localhost//mvc/public");
//require CORE."app.php";
define('DSN','mysql:host=localhost;dbname=cms');
define('DB_USER', 'root');
define('DB_PASS','');
require "../vendor/autoload.php";
$app = new itrax\core\app();
?>