<?php

session_start();

echo 'Session data: ' . $_SESSION['data'];
echo "<p>Some session values:</p>";
echo "<ul>";
echo "<li>Name: " . session_name() .  "</li>";
echo "<li>Id: " . session_id() .  "</li>";
echo "<li>Status: " . session_status() .  "</li>";
echo "</ul>";

session_destroy();

echo '<br>';
echo 'Data destroyed. Reload the page to see the change in the session data variable.';