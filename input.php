<?php
include_once("header.php");

session_start();
if (! isset($_SESSION["info"])) {
    die("You need to enter properly");
}

$img_decoded = $_SESSION["info"][0];
$img_name = $_SESSION["info"][1];

echo "<p> Nie posiadamy informacji na temat tego kodu, wesprzyj nas i pomóż uzupełnić braki :</p>";
echo "<p> Podaj informacje na temat $img_decoded - $img_name</p>";
?>


<form action="inc/upload_info.inc.php">
    
    <input type="text" accept="text" name="img_info" id="img_info">
    <div style="display: flex; flex-direction:column;">
        <input type="radio" id="bin_type" name="bin_type" value="0">
        <label for="mieszane">Mieszane</label><br>

        <input type="radio" id="bin_type" name="bin_type" value="1">
        <label for="plastik_metal">plastik_metal</label><br>

        <input type="radio" id="bin_type" name="bin_type" value="2">
        <label for="papier">papier</label>

        <input type="radio" id="bin_type" name="bin_type" value="3">
        <label for="szkło">szkło</label>


        <input type="submit" name="submit" value="submit">
    </div>
</form>

<?php
include_once("footer.php");
?>