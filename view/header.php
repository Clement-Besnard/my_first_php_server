<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Audi</title>
    <link rel='icon' href='https://assets.stickpng.com/images/580b585b2edbce24c47b2c18.png' type="image/png">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");

        body {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
        }

        header {
            position: fixed;
            width: 100%;

            color: #fff;
            padding: 10px;
            text-align: right;
            z-index: 1000;
        }

        .loginbutton {
            display: inline-block;
            padding: 10px 20px;
            margin-right: 2%;
            text-decoration: none;
            color: black;
            background-color: white;
            border-radius: 35px;
            transition: background-color 0.3s;
        }

        .registerbutton {
            display: inline-block;
            padding: 10px 20px;
            margin-right: 2%;
            text-decoration: none;
            color: #fff;
            background-color: black;
            border-radius: 35px;
            transition: background-color 0.3s;
        }

        .deconnectbutton {
            display: inline-block;
            padding: 10px 20px;
            margin-right: 2%;
            text-decoration: none;
            color: #fff;
            background-color: black;
            border-radius: 35px;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_SESSION['name'])) {
        echo '<header><a href="/deconnexion" class="deconnectbutton"><span class="material-symbols-outlined" style="vertical-align: middle; margin-right:10px">door_open</span>';
        echo $_SESSION['name'];
        echo '</a></header>';
    } else {
        echo '<header>
        <a href="/connexion" class="loginbutton">Connexion</a>
        <a href="/inscription" class="registerbutton">Inscription</a>
        </header>';
    }

