<?php
include_once("header.php");
?>


    <div class="main">
      <div class="instruction">
        <!-- <div class="instructions_left">
          <img class="img_instruction"src="phone_barcode.png" alt="scanning_barcode_with_phone">
        </div>
        <div class="instructions_right">
            <h1>Wykonaj telefonem zdjęcie</h1>
            <p>Nacisnij guzik wyślij</p>
            <p>Nacisnij guzik wyślij</p> -->
            <div class = "element">
              <img class="img_instruction"src="phone_barcode.png" alt="scanning_barcode_with_phone">
              <a>Zrób zdjęcie kodu kreskowego a następnie naciśnij przycisk "Prześlij".</a>
            </div>
            <div class = "element">
              <img class="img_instruction"src="read.png" alt="recycle_bins">
              <a>Ukażą ci się informacje na temat produktu oraz w jakim koszu powinno się znaleźć opakowanie.</a>
            </div>
            <div class = "element">
              <img class="img_instruction"src="recycle_bins.png" alt="scanning_barcode_with_phone">
              <a>Segreguj śmieci :)</a>
            </div>
            
        </div>
      </div>


      <form class="form" action="inc/upload.inc.php" method="post" enctype="multipart/form-data">
        <label for="fileToUpload">Zrób zdjęcie kodu kreskowego:</label>
        <br>
        <input type="file" accept="image/*" name="fileToUpload" id="fileToUpload" capture>
        <input type="submit" value="Prześlij" name="submit">
        <?php
        if (isset($_GET["error"])) {
          if ($_GET["error"] == "decodeError"){
            echo "Nie udało się przeczytać tego kodu kreskowego, postaraj się zrobić wyraźniejsze zdjęcie";
          };

          if ($_GET["error"] == "noImg") {
            echo "Proszę wybrać/zrobić zdjęcie";
          }
        }
        ?>
      </form>

    <!-- <form action="inc/db_test.inc.php" method="post" enctype="multipart/form-data">
      <input type="submit" value="test" name="test_db_connection">
    </form> -->

  <?php
    include_once("footer.php");
  ?>
