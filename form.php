<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Test UBG</title>
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
    </head>

    <body>
		<form action="Pages/send.php" method="POST">
			<p>	
				<label for="titre">Titre :</label><br/>
				<input type="text" id="titre" name="titre" /><br/>
				<label for="comments">Commentaire :</label><br/>
				<textarea name="comments" id="comments" rows="10" cols="50"></textarea><br/>
				<input type="submit" value="Valider" /><br/>
			</p>
		</form>
    </body>
</html>