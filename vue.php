<!doctype html>
<html lang="fr" class="no-js">
<head>
    <meta charset="utf-8">
    <title>Annuaire</title> 
    <meta name="description" content="Annuaire des employés">
    <link rel="stylesheet" href="annuaire.css">
</head>
<body>
  <header>
    <div id="logo">ailTch</div>
      <!-- ------------------------------------------- Menu ---------------------------------------- -->
    <nav>  
        <ul>
            <li><a href="index.php?action=Accueil"> Accueil</a></li>
            <li><a href="index.php?action=Admin"> Administrateur</a></li>
        </ul> 
    </nav>
  </header>
  <section id="pageContent">
  <article>
    <br><h1> Annuaire des employés </h1>
  </article>
    <article>
      <!-- ------------------------------------------- Formulaire Recherche  ---------------------------------------- -->
      <form action='index.php?action=Rechercher' method='POST'>
        <table class="table_annuaire">
          <tr> 
            <td> <input type='text' name='id' id='id' disabled > </td>
            <td> <input type='text' name='prenom' id='prenom' ></td>
            <td> <input type='text' name='nom' id='nom' ></td> 
            
            <td colspan='2'> <input type='submit' name='action' value='Rechercher'></td>
          </tr>
        </table>
      </form>
    </article>
    <article>
      <!-- ------------------------------------------- Formulaire accueil  ---------------------------------------- -->
      <table class="table_annuaire">
        <?php
        echo "<thead>";
          echo "<tr>";
            echo "<th>#</th>";
            echo "<th>Prénom</th>";
            echo "<th>Nom</th>";
            
            echo "<th colspan='2'>Actions</th>";
          echo "</tr>";
        echo "</thead>";
        
        echo "<tbody>";
          foreach ($tblEmp as $employe) {
            echo "<form action='index.php?action=Accueil' method='POST'>";
            echo 
            "<tr>" 
                ."<td>"."<input readonly type='number' name='ide' id='ide' value=".$employe['emp_id']."></td>" 
                ."<td>"."<input type='text' name='prenom' id='prenom' value='".$employe['emp_pnom'] . "'></td>" 
                ."<td>"."<input type='text' name='nom' id='nom' value='".$employe['emp_nom'] . "'></td>" 
                
                ."<td>". "<input type='submit' name='action' value='Supprimer'></td>"
                ."<td>". "<input type='submit' name='action' value='Modifier'></td>".
            "</tr>";
            echo "</form>";
          }
        echo "</tbody>";
        ?>
      </table>
      </article>
      <article >
            <!-- ------------------------------------------- Pagination ---------------------------------------- -->
            <?php
            
           
             
            $debut = $limite* $page ;
            echo "Affiche $limite sur $nombreelementtotal donnée(s) ";
echo "<br/>";
echo "page $page  sur $nombredepages ";
 
echo "<hr>";
while ($element = $rqt->fetch()){
 
    echo $element['emp_nom'];
    echo " - ";
    echo $element['emp_pnom'];
    echo "<br/>";
}
 
echo "<hr>";
 
if($page<1){
 
 } else{
 
    ?>
    <a href="?page=<?php echo $page - 1; ?>">Page précèdent</a>&nbsp&nbsp
     
    <?php
        }
     
    if ($page>$nombredepages-1){
     
    }else{
    ?>
    
    
    <a href="?page=<?php echo $page + 1; ?>">Page suivant</a>
     
    <?php
    }
    ?>
     
 

      </article>
      <!-- ------------------------------------------- Formulaire ajout ---------------------------------------- -->
      <article>
        <h1>Ajouter un employé</h1>
        <br>
        <form action="index.php?action=Accueil" method="POST">
          <fieldset>
            <input type="text" name="prenom" id="prenom"  placeholder="Prénom"> <br><br>
            <input type="text" name="nom" id="nom"  placeholder="Nom"><br><br>
            <input type="submit" name="action" value="Ajouter">
            <br><br>
          </fieldset>
        </form>
      </article>
  </section>
  <footer>
        <p>&copy; BTS SIO | Lycée Pierre Poivre | Version 4 </a>
    </footer>
</body>
</html>
</body>
</html>