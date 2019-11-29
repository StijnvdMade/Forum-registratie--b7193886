<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
        <?php
        session_start();
        ?>
        <style>

        </style>
    </head>

    <body>


        <?php
        $email = $_POST['email'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        echo "your name is $name \n";
        echo "your email is " . $email . PHP_EOL;
        echo "your age is " . $age . PHP_EOL;
        ?>

    </body>
</html>