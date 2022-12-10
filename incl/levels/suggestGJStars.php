<?php
//error_reporting(0);
chdir(dirname(__FILE__));
include "../lib/connection.php";
require_once "../lib/GJPCheck.php";
require_once "../lib/exploitPatch.php";
require_once "../lib/mainLib.php";
$gs = new mainLib();

$gjp = ExploitPatch::remove($_POST["gjp"]);
$stars = ExploitPatch::remove($_POST["stars"]);
$feature = ExploitPatch::remove($_POST["feature"]);
$levelID = ExploitPatch::remove($_POST["levelID"]);
$accountID = GJPCheck::getAccountIDOrDie();
$difficulty = $gs->getDiffFromStars($stars);

$gs->rateLevel($accountID, $levelID, $stars, $difficulty["diff"], $difficulty["auto"], $difficulty["demon"]);
$gs->featureLevel($accountID, $levelID, $feature);
//$gs->verifyCoinsLevel($accountID, $levelID, 1);
echo 1;
?>
