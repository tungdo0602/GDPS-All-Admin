<?php
chdir(dirname(__FILE__));
//error_reporting(0);
require_once "../lib/GJPCheck.php";
require_once "../lib/exploitPatch.php";
require_once "../lib/mainLib.php"; //this is connection.php too
$gs = new mainLib();

$accountID = GJPCheck::getAccountIDOrDie();

exit("2");
?>
