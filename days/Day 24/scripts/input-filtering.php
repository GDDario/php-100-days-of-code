<?php

$input = "<script>alert('XSS ATTACK!')</script>";
$sanitizedInput = htmlspecialchars($input);

echo $input; # Result of not sanitizing (will pop up an alert)
echo $sanitizedInput; # Sanitized, safe string

