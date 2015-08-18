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
            	$bdd = new PDO('mysql:host=localhost;dbname=ubg;charset=utf8', 'deathcode972', '');
            }
            catch(Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }
		
		    $titre = $_POST['titre'];
		    $comments = $_POST['comments'];
            $request = $bdd->prepare('INSERT INTO ubg(titre, comments) VALUES(:titre, :comments)');
            $request->execute(array(
	        'titre' => $titre,
	        'comments' => $comments
        	));

            echo 'Le titre et le commentaires ont bien été ajoutés !';
		?>
    </body>
</html>