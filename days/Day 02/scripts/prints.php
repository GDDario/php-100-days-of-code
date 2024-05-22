<?php

$br = PHP_EOL . PHP_EOL;

echo 'This is an output statement using echo' . $br;

print 'This is an output statement using print 😉' . $br;

$number = 1.634514;
printf('This is an output statement using printf. Example: formatted number %.2f', $number); echo $br;

$emoji = '😎';

echo <<<heredoc
    This is an output statement
    using heredoc + echo    
    $emoji
heredoc . $br;

echo <<<'nowdoc'
    This is an output statement
    using nowdoc + echo    
    $emoji (does not compiles variables)
    nowdoc . $br;

echo '==== These two statements are not necessarily used to print something, but can receive a string to print to inform the user ====';

exit('Output statement using the exit() function' . PHP_EOL);
// Move this line above exit to see it working!
die ('Output statement using the die() function' . PHP_EOL);

?>