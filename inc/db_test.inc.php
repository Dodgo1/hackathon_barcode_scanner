<?php

include_once("db.inc.php");
echo "test_start:";


$sql_test_insert = "INSERT INTO imgs (img_name,img_info) VALUES (?,?);";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql_test_insert)) {
  header("location: db_test.inc.php?error=stmtfailed");
  exit();
} else {
    $test_name = "test.img";
    $test_info = "info na temat test.img";
    mysqli_stmt_bind_param($stmt, "ss", $test_name, $test_info);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}




// $sql_print_all = "SELECT * FROM imgs "


?>