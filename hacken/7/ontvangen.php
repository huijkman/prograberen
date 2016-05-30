<!DOCTYPE html>
<html>
    <head>
        <title>Hacken - 7</title>
        <style>
            * {
                box-sizing: border-box;
                font-family: Arial, serif;
            }
            html,
            body {
                height: 100%;
                width: 100%;
                padding: 0;
                margin: 0;
                text-shadow: 1px 1px 1px #000;
            }
            .text {
                width: 500px;
                margin: 10% auto;
                background: rgba(0,0,0,0.8);
                border-radius: 8px;
                padding: 20px;
                box-shadow: 0 0 3px rgba(0,0,0,0.5);
            }
            h1 {
                font-size: 40px;
            }
            p {
                font-size: 24px;
            }
            p a {
                color: #fff;
                text-shadow: 1px 1px 1px #000;
            }
            .boodschap {
                width: 100%;
                height: 100%;
                text-align: center;
                padding: 60px;
            }
            #succes {
                background: #fff url(img/vault-open.jpg) 50% 50% no-repeat;
                background-size: cover;
                color: #fff;
            }
            #faal {
                background: #fff url(img/vault-closed.jpg) 50% 50% no-repeat;
                background-size: cover;
                color: #fff;
            }
        </style>
    </head>
    <body>
        <?php
        $a = $_POST['A'];
        $b = $_POST['B'];
        $c = $_POST['C'];
        $d = $_POST['D'];
        $e = $_POST['E'];

        if ($a == "*" AND $b == "#ccc" AND ($c == "h1" OR $c == "<h1>") AND $d == "1px" AND $e == ";") {
        ?>
        <div id="succes" class="boodschap">
            <div class="text">
                <h1>Hoera!</h1>
                <p>Je hebt de code gekraakt!</p>
            </div>
        </div>
        <?php
        } else {
        ?>
        <div id="faal" class="boodschap">
            <div class="text">
                <h1>Helaas!</h1>
                <p>Je hebt de code nog niet gekraakt!</p>
                <p><a href="index.html">&laquo; Probeer het nog eens</a></p>
            </div>
        </div>
        <?php
        }
        ?>
    </body>
</html>