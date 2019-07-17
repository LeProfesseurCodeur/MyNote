<?php
	require_once('db/dbconf.php');
	require_once('header.php');
	require_once('footer.php');
?>

<form action="create.php" method="POST">
	<label>Titre</label>
	<input type="text" name="title" autofocus="autofocus">
	<br>
	<label>Description</label>
	<textarea name="desc"></textarea>
	<button type="submit" name="save">Enregistrer</button>
</form>