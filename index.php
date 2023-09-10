<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="icon" href="public/images/logo.png" type="image/x-icon">
    <title>Privalia Shop</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
        }

        body{
            font-family: 'Roboto', sans-serif;
        }

        .container{
            height: 100vh;
            background: #D47597;
            padding: 20px;
        }

        header {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center
        }

        img {
            width: 20px;
            height: 20px;
        }

        .container-menu {
            padding: 0;
        }

        .container-menu, .container-title, .container-info {
            display: flex;
            align-items: center;
            gap: 5px;
            text-transform: uppercase;
            color: white;
        }

        .container-menu {
            justify-content: flex-start;
            flex: 1;
        }

        .container-title {
            justify-content: center;
            flex: 1.5
        }

        .container-info {
            justify-content: flex-end;
            flex: 1.5;
        }

        h1 {
            font-size: 1.1em;
        }

        .container-info_register {
            border: 1px solid black;
            padding: 10px;
            border-radius: 5px;
        }

    </style>
</head>
<body>
    <div class="container">
        <header>
            <menu class="container-menu">
                <img src="public/images/menu.png" alt="menu icon" />
                <span>Menu</span>
            </menu>

            <section class="container-title">
                <img src="public/images/logo.png" alt="logo icon" />
                <h1>
                    <?php
                    $title = "privalia shop";
                    echo $title;
                    ?>
                </h1>
            </section>

            <section class="container-info">
                <?php
                $aboutUs = "about us";
                $register = "register"
                ?>
                <img src="public/images/info.png" alt="info icon" />
                <span class="about"><?php echo $aboutUs ?></span>
                <span class="container-info_register"><?php echo $register ?></span>
            </section>
        </header>
    </div>
</body>
</html>