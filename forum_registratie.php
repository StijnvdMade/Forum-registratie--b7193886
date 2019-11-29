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
        echo "<form action='registratie_handler.php' method='post'>" . 
        "<input id='POST-name' type='name' placeholder='Voer je gebruikersnaam in' name='name'>" . PHP_EOL . 
        "<input id='POST-name' type='email' placeholder='Voer je email adres in' name='email'>" . PHP_EOL .
        "<input id='POST-name' type='age' placeholder='Voer je leeftijd in' name='age'>" . 
        "<input type='submit' value='Verstuur'>" . 
        "</form>";
        ?>

    </body>
</html>