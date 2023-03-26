<?php
// RODZJE SMIETNIKOW
// 0 - mieszane
// 1 -plastik i metal
// 2- papier
// 3- szkło


session_start();
$img_decoded = $_SESSION["info"][0];
$img_name = $_SESSION["info"][1];

if (! $img_info = $_GET["img_info"]){
    header("location: ../input.php?error=emptyInputImg_info");
    exit();
}
if (! $img_bin_type = $_GET["bin_type"]){
    header("location: ../input.php?error=emptyInputImg_bin_type");
    exit();
}

include_once("db.inc.php");

$sql = "INSERT INTO imgs (img_name,img_decoded,img_info,img_bin_type) VALUES (?,?,?,?);";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../input.php?error=stmtfailed");
    exit();
  }
mysqli_stmt_bind_param($stmt, "ssss", $img_name,$img_decoded,$img_info, $img_bin_type);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

echo "Successfull Download";
sleep(3);

header("location: ../index.php?error=none");
exit();

