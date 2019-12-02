<?php

require_once("modele.php");

class Employes extends DB {

  function getSelect(){

    $strSQL = "SELECT * FROM employe";
    $tabValeur = array("*");
    $sel = $this->Requete($strSQL, $tabValeur);
    return $sel;
  }

  function setDelete($id){

    $strSQL = "DELETE FROM employe WHERE emp_id = ?";
    $tabValeur = array($id);
    $del = $this->Requete($strSQL, $tabValeur);
    return $del;
  }

  function setAdd($tblemp){

    $strSQL = "INSERT INTO employe (emp_pnom,emp_nom) VALUES (?, ?)";
    $tabValeur = array(
      $tblemp['prenom'],
      $tblemp['nom']
    );
    $ins = $this->Requete($strSQL, $tabValeur);
    return $ins;
}

  function setUpdate($tblemp){

    $strSQL = "UPDATE employe SET emp_pnom = :pnom, emp_nom = :nom  WHERE emp_id = :ide;";

    $tabValeur = array(
      'pnom'  => $tblemp['prenom'], 
      'nom'   => $tblemp['nom'], 
      
      'id'   => $tblemp['ide'],
    );
    
    $upd = $this->Requete($strSQL, $tabValeur);
    return $upd;
  }

  function Search($tblemp){

    $strSQL = "SELECT * FROM employe 
                WHERE emp_pnom LIKE  :pnom 
                OR emp_nom     LIKE  :nom 
                
              ";

    empty($tblemp['prenom'])  ? $tblemp['prenom'] = '*' : $tblemp['prenom']; 
    empty($tblemp['nom'])     ? $tblemp['nom']    = '*' : $tblemp['nom']; 
    

    $tabValeur = array(
          'pnom'  => "%".$tblemp['prenom']."%", 
          'nom'   => "%".$tblemp['nom']."%", 
          
        );

    $sch = $this->Requete($strSQL, $tabValeur);
    return $sch;
    }
   
}
?>