<?php
define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DB", "TTNM");
define("ROOT", dirname(__FILE__));
define("BASE_URL", "http://localhost/".ROOT."/");

$mysqli = new mysqli(HOST, USER, PASS, DB);
$mysqli -> set_charset("utf8");
if ($mysqli->connect_error) {
    die("Kết nối CSDL thất bại!<br>--> ".$mysqli->connect_error."<br>");
    exit();
}
?>