<!DOCTYPE html>
<html>
    <head>
        <title>Hacken - 4</title>
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
                background: #0f0 url(img/dans.jpg) 50% 50% no-repeat;
                background-size: cover;
                color: #fff;
            }
            #faal {
                background: #f00 url(img/sad-danbo.jpg) 50% 50% no-repeat;
                background-size: cover;
                color: #fff;
            }
        </style>
    </head>
    <body>
        <?php
        function vertaal($string)
        {
            $code = array('!','@','#','$','%','^','&','*','(',')','_');
            $vertaald = array('S','u','p','e','r','g','e','h','e','i','m');
            
            return str_replace($code,$vertaald,$string);
        }
        
        $post_var = $_POST['wachtwoord'];

        if($post_var == "Supergeheim"){
            $post_var = "niks";
        }

        $ww = vertaal($post_var);

        if ($ww == "Supergeheim") {
        ?>
        <div id="succes" class="boodschap">
            <h1>Hoera!</h1>
            <p>Je hebt het wachtwoord gevonden!</p>
        </div>
        <?php
        } else {
        ?>
        <div id="faal" class="boodschap">
            <h1>Helaas!</h1>
            <p>Dat is niet het goede wachtwoord!</p>
            <p><a href="index.html">&laquo; Probeer het nog eens</a></p>
        </div>
        <?php
        }
        ?>
    </body>
</html>