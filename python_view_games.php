<html>
<body>
<h3>View GAME Details</h3>
</body>
</html>

<?php
    // replace ' ' with '\ ' in the strings so they are treated as single command line args

    $command = 'python3 view_games.py';

    // remove dangerous characters from command to protect web server
    $escaped_command = escapeshellcmd($command);
    echo "<p>command: $command <p>"; 
    // run insert_new_item.py
    system($escaped_command);           
?>
