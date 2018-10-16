<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>kok</title>
  </head>
  <body>
  <?php $submit=filter_input(INPUT_POST,'submit');
        $vek=filter_input(INPUT_POST, 'age');
        $pohlavi=filter_input(INPUT_POST, 'gender')
  ?>


<?php
if ($vek >= 18) {
  echo " Můžeš jít";

  if ($pohlavi == "zena") {
   echo " Vstupte prosím";
 }
   else {
  echo " Vstupné je 150,-";
   }
}
  else {
    echo " Nemůžeš jít";
  }
 ?>
 <br >Copyright (c) 2018 Copyright Holder All Rights Reserved.

      </form>
    </body>
  </html>
