<html>
<body>
<h3>Enter information about an item to add to the database:</h3>

<form action="AddDeveloper.php" method="post">
    Name: <input type="text" name="NAME"><br>
    Creation: <input type="text" name="CREATION"><br>
    Games: <input type="text" name="GAMES"><br>
		Location: <input type="text" name="Location"><br>
    <input name="submit" type="submit" >
</form>
<br><br>

</body>
</html>

<?php
if (isset($_POST['submit'])) 
{
    // replace ' ' with '\ ' in the strings so they are treated as single command line args
    $NAME = escapeshellarg($_POST[NAME]);
    $CREATION = escapeshellarg($_POST[CREATION]);
    $GAMES = escapeshellarg($_POST[GAMES]);
		$Location = escapeshellarg($_POST[Location]);
		

    $command = 'python3 Insert_Developer.py' . ' '.  $NAME . ' ' . $CREATION . ' ' .  $GAMES . ' ' . $Location;

    // remove dangerous characters from command to protect web server
    $escaped_command = escapeshellcmd($command);
    echo "<p>command: $command <p>"; 
    // run insert_new_item.py
    system($escaped_command);           
}
?>