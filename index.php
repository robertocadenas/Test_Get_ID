<html>
<head>
    <title>Test Get Form and ID </title>
</head>
<body>

    <?php

    $name = "Roberto";
    $email = "robert.c@gmail.gmail.com";
    $password = "12345678";

    if(isset($_GET["userid"])) {
        $userid = $_GET["userid"];
        echo "Your user id is " . $userid;
    }

    if(isset($_GET["email"]) && isset($_GET["password"]) && $_GET["email"] == $email AND $_GET["password"] == $password) {
        echo "Hello " . $name;
    } else {

        echo '<h3>¿Quién eres?</h3>

        <form method="get" action="index.php?userid=' . $userid . '" target="_self">
            <fieldset>
               <legend>Login:</legend>
                <label for="email">Email:</label><br/>
                <input class="login" type="email" name="email" id="email"><br/>
                <label for="password">Contraseña:</label><br/>
                <input class="login" type="password" name="password" id="password">
                <button type="submit" class="Entrar">Entrar</button>
            </fieldset>
        </form>';
    }



    ?>



</body>

</html>
