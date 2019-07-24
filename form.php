<?php
if($_GET['name']){
    $message = 'Hello there ' . $_GET['name'];
}
else{
    $message = 'Please type your name';
}
?>
<!doctype html>
<html lang="en">
    <head></head>
    <body>
        <h1><?php echo $message; ?></h1>
        <form action="form.php" method="get">
            <label>What is your name?</label>
            <input type="text" name="name" placeholder="Your name, please">
            <button type="submit">Submit</button>
        </form>
    </body>
</html>