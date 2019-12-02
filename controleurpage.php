<?php

class Pagination extends DB{

$nombreelementtotal = NULL;
$page=NULL;

     function __construct() {
        
    }

function getpage($page,$debut){
      
 
$resultatNbLignes =('SELECT found_rows()');
$nombreelementtotal = $resultatNbLignes->fetchColumn();
 
$nombredepages = ceil($nombreelementtotal / $limite);
$res= $this->Requete($strSQL);
return $this->Requete ($res);

    }

    function getSuivant($page){
        $rqt = 'SELECT SQL_CALC_FOUND_ROWS * FROM employe ORDER BY emp_nom  LIMIT :limite OFFSET :debut';
$rqt = $cnx->prepare($rqt);
 
$rqt->bindValue('limite',$limite,PDO::PARAM_INT);
$rqt->bindValue('debut',$debut,PDO::PARAM_INT);
 
$rqt->execute();
 
$resultatNbLignes = $cnx->query('SELECT found_rows()');
$nombreelementtotal = $resultatNbLignes->fetchColumn();
 
$nombredepages = ceil($nombreelementtotal/$limite);
    }
}
    ?>