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
	
	
	$titre = $donnees['titre'];
	$comments = $donnees['comments'];
    $keywords = array("développeur", "php", "html", "Lyon", "cake");
    
    $nb = strlen($titre);
    for($i = 1; $i <= $nb; $i++)
    {
        $star .= '*';
    }
    $nb2 = strlen($comments);
    for($i = 1; $i <= $nb; $i++)
    {
        $star .= '*';
    }
    
    if ($titre == $keywords)
        $titre = str_replace($keywords, $star, $titre);
        elseif ($comments == $keywords)
        $comments = str_replace($keywords, $star,$titre);
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
    
    echo '<TR ALIGN=center>';
	echo '<TD>'.$titre.'</TD>';
	echo '<TD>'.$comments.'</TD>';
    echo '</TR>';
}
	
    echo '</TABLE>';
$reponse->closeCursor(); // Termine le traitement de la requête

?>
    </body>
</html>

// Génère : Hll Wrld f PHP
$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");

// Génère : You should eat pizza, beer, and ice cream every day
$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");

$newphrase = str_replace($healthy, $yummy, $phrase);