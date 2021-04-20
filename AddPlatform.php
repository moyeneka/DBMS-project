<html>
<body>
<h3>Enter information about an item to add to the database:</h3>

<form action="AddPlatform.php" method="post">
    Name: <input type="text" name="NAME"><br>
    ReleaseDate: <input type="text" name="RELEASE_DATE"><br>
    Manufacturer: <input type="text" name="MANUFACTURER"><br>
		Predecessor: <input type="text" name="PREDECESSOR"><br>
		Sales: <input type="text" name="SALES"><br>
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
    $RELEASE_DATE = escapeshellarg($_POST[RELEASE_DATE]);
    $MANUFACTURER = escapeshellarg($_POST[MANUFACTURER]);
		$PREDECESSOR = escapeshellarg($_POST[PREDECESSOR]);
		$SALES = escapeshellarg($_POST[SALES]);

    $command = 'python3 Insert_Platform.py' . ' '.  $NAME . ' ' . $RELEASE_DATE . ' ' . $MANUFACTURER . ' ' . $PREDECESSOR . ' ' . $SALES;

    // remove dangerous characters from command to protect web server
    $escaped_command = escapeshellcmd($command);
    echo "<p>command: $command <p>"; 
    // run insert_new_item.py
    system($escaped_command);           
}
?>


