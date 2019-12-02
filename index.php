<?php 
  // Cela signifie que vous ne souhaitez pas voir le résultat de votre script mis une fois pour toutes en cache, 
  header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
  header("Cache-Control: no-cache");
  header("Pragma: no-cache");

  if (isset($_REQUEST['action'])) {

    header('Location: ./vue.php'); 
  }
  else {
    header('Location: ./vue.php'); 
  }