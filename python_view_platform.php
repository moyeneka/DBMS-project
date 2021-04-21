<html>
   <head>
      <title>Game Database: View Games</title>
   </head>
	
   <body>
     <div id = "links" align = "middle" >
         <h2>Welcome to the database!</h2> <br>
         <a href = "/~scanales/project_python/home.html">Home</a> |
         <a href = "/~scanales/project_python/AddPlatform.php">Add a Platform</a> | 
         <a href = "/~scanales/project_python/AddDeveloper.php">Add a Developer</a> |
				 <a href = "/~scanales/project_python/AddGame.php">Add a Developer</a> |
				 <a href = "/~scanales/project_python/python_view_games.php">View All Platform</a> |
         <a href = "/~scanales/project_python/python_view_games.php">View All Games</a>
      </div>
   </body>
	
</html>

<?php
    // replace ' ' with '\ ' in the strings so they are treated as single command line args

    $command = 'python3 view_platform.py';

    // remove dangerous characters from command to protect web server
    $escaped_command = escapeshellcmd($command);
    echo "<p>command: $command <p>"; 
    // run insert_new_item.py
    system($escaped_command);           
?>
