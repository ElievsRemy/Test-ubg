<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Test UBG</title>
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
    </head>

    <body>
	
<?php
    try
    {
	    // Connexion a la base de donnée
	    $bdd = new PDO('mysql:host=localhost;dbname=ubg;charset=utf8', 'deathcode972', '');
    }
    catch(Exception $e)
    {
	    die('Erreur : '.$e->getMessage());
    }

    $answer = $bdd->query('SELECT * FROM ubg');

    //afficher sous forme de tableau
    while ($data = $answer->fetch())
    {
    ?>
    <table>
   <caption>List !</caption>

   <thead> <!-- En-tête du tableau -->
       <tr>
           <th>Titre</th>
           <th>Commentaires</th>
       </tr>
   </thead>

   <tbody> <!-- Corps du tableau -->
       <tr>
           <td><?php echo $data['titre']; ?></td>
           <td><?php echo $data['comments']; ?></td>
       </tr>
      
   </tbody>
</table>
      <?php  
    $answer->closeCursor();
    }
    ?>

	</body>
</html>