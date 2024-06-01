<?php

$paragraphContent = 'This is a paragraph content written in PHP that will be placed in HTML.';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and HTML</title>
</head>

<body>
    <h1>This is a page with PHP embbeded in HTML.</h1>

    <p><?= $paragraphContent ?></p>

    <?php
    for ($i = 1; $i < 11; $i++) {
        echo "<p>Paragraph ($i) created in echo command in PHP, in a for loop.<p>";
    }
    ?>
    
    <br>

    <form action="process-form.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea>

        <br><br>
        <input type="submit" value="Send">
    </form>
</body>

</html>