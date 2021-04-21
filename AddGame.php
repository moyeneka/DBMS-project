<html>
<body>
<h3>Enter information about an item to add to the database:</h3>

<form action="AddGame.php" method="post">
    Id: <input type="text" name="ID"><br>
		Name: <input type="text" name="NAME"><br>
    ReleaseDate: <input type="text" name="RELEASE_DATE"><br>
    Platform: <input type="text" name="PLATFORM"><br>
		Developer: <input type="text" name="DEVELOPER"><br>
		Genre: <input type="text" name="GENERE"><br>
    <input name="submit" type="submit" >
</form>
<br><br>

</body>
</html>

<?php
if (isset($_POST['submit'])) 
{
    // replace ' ' with '\ ' in the strings so they are treated as single command line args
    $ID = escapeshellarg($_POST[ID]);
		$NAME = escapeshellarg($_POST[NAME]);
    $RELEASE_DATE = escapeshellarg($_POST[RELEASE_DATE]);
    $PLATFORM = escapeshellarg($_POST[PLATFORM]);
		$DEVELOPER = escapeshellarg($_POST[DEVELOPER]);
		$GENRE = escapeshellarg($_POST[GENRE]);

    $command = 'python3 Insert_Game.py' . ' '. $ID . ' '. $NAME . ' ' . $RELEASE_DATE . ' ' . $PLATFORM . ' ' . $DEVELOPER . ' ' . $GENRE;

    // remove dangerous characters from command to protect web server
    $escaped_command = escapeshellcmd($command);
    echo "<p>command: $command <p>"; 
    // run insert_new_item.py
    system($escaped_command);           
}
?>


