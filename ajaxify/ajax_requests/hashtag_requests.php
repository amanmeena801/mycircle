<?php
  session_start();
  if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == "xmlhttprequest") {

    include '../../config/classesGetter.php';
    $Mycircle = new Mycircle;

    if (isset($_GET['hahstagFeeds'])) {
      $Mycircle->MycirclegedPost($_GET['Mycircle'], "ajax", $_GET['hahstagFeeds']);
    }

  }
?>
