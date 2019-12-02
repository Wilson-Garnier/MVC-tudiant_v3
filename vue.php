<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../annuaire.css">
    <style>
        .champ{
            margin-bottom: 10px;
        }
    </style>
    <title>Document</title>
</head>
<body>
<header>
    <div id="logo">ailTch</div>
      <!-- ------------------------------------------- Menu ---------------------------------------- -->
    <nav>  
        <ul>
            <li><a href="../index.php?action=Accueil"> Accueil</a></li>
            <li><a href="../index.php?action=Admin"> Statistiques</a></li>
        </ul> 
    </nav>
  </header>
  <section id="pageContent">
    <article>
        <h1> Annuaire des employés </h1>
    </article>
    <article>
        <!-- ------------------------------------------- Formulaire Recherche  ---------------------------------------- -->
        <h1>Administration</h1><br>
        <form method="POST" action="index.php">
            <div class="champ">
                <label for="pseudo">Entrez un pseudonyme : </label>
                <input type="text" id="pseudo" name="pseudo">
            </div>
            <div class="champ">
                <label for="pass">Entrez un mot de passe :</label>
                <input type="password" id="pass" name="pass">
            </div>
            <div class="champ">
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </article>
</body>
</html>