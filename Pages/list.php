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

        $reponse = $bdd->query('SELECT * FROM ubg');


    echo '<TABLE BORDER>';
    echo '<TR>';
	echo '<TH>Titres</TH>';
	echo '<TH>Commentaires</TH>';
	echo '</TR>';
	
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
    
    echo '<TR ALIGN=center>';
	echo '<TD>'.$donnees['titre'].'</TD>';
	echo '<TD>'.$donnees['comments'].'</TD>';
    echo '</TR>';
}
	
    echo '</TABLE>';
$reponse->closeCursor(); // Termine le traitement de la requête

?>
	</body>
</html>