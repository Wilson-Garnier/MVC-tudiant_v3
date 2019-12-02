<?php 
  // Cela signifie que vous ne souhaitez pas voir le résultat de votre script mis une fois pour toutes en cache, 
  header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
  header("Cache-Control: no-cache");
  header("Pragma: no-cache");
  
  try {
    if (isset($_REQUEST['action'])) {
      require "controleur.php";
      require "controleurpage.php";
      $employe = new Employes();
      $page = new Pagination();

      if ($_POST['action'] == 'Supprimer') {
        $employe->setdelete(intval($_POST['ide']));
      } 

      if ($_POST['action'] == 'Ajouter') {
        $employe->setAdd($_POST);
      } 

      if ($_POST['action'] == 'Modifier') {
        $_POST['ide']=intval($_POST['ide']);
        $employe->setUpdate($_POST);
      } 

      if ($_POST['action'] == 'Rechercher') {
        $tblEmp = $employe->Search($_POST);
        include "vue.php";
      }

      if ($_GET['action'] == 'Admin') {
        header('Location: ./admin/index.php');  
      }  

      if ($_GET['action'] == 'Accueil') {
        $tblEmp = $employe->getSelect();
        include "vue.php";
      }  
    }
    else {
      require "controleur.php";
      require "controleurpage.php";
      $employes = new Employes();
      $tblEmp = $employes->getSelect();
      $pages = new Pagination();
      $tbpag = $pages->getpage();
      include "vue.php";
    }

  }
  catch (Exception $e) {
      erreur($e->getMessage());
  }  
  
?>
