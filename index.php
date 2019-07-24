<?php
$a = 'Hello there';
$A = 'Hello there, friend';
?>
<!doctype html>
<html lang="en">
    <head>
        <title><?php echo 'My Web page'; ?></title>
    </head>
    <body>
        <h1><?php echo $a; ?></h1>
        <?php
            phpinfo();
        ?>
    </body>
</html>
