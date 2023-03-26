<?php
include_once("header.php");

if (isset($_GET["info"]) && isset($_GET["bin_type"])) {
    // pokaz informacje
    echo $_GET['info'];

    if ($_GET["bin_type"] == 0){
        echo "mieszane";
    }
    if ($_GET["bin_type"] == 1){
        echo "plastik i metal";
    }
    if ($_GET["bin_type"] == 2){
        echo "papier";
    }
    if ($_GET["bin_type"] == 3){
        echo "szkło";
    }

    echo $_GET['code'];
}else{
    // wyszedl jakis error
    echo "something went wrong error ALPHA";
};

?>

<?php
include_once("footer.php");
?>