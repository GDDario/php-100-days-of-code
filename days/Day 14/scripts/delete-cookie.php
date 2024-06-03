<?php

echo "<p>Cookie value (redeemed by the navigator): {$_COOKIE['cookie_test']}</p>";

unset($_COOKIE['cookie_test']);
setcookie('cookie_test', '', time() - 3600, '/');
?>

<p>Cookie deleted!</p>
<a href="cookies.php">Go back</a>