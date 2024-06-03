<?php

session_start();
    
$_SESSION['data'] = 'Some data';

echo "<p>Session started.</p>";
echo "<p>Some session values:</p>";
echo "<ul>";
echo "<li>Name: " . session_name() .  "</li>";
echo "<li>Id: " . session_id() .  "</li>";
echo "<li>Status: " . session_status() .  "</li>";
echo "</ul>";
?>


<a href="session-2.php">Go to session 2</a>