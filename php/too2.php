<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>PHP harjutus</title>
    </head>
    <body>
        
        <form action="too2.php" method="POST">
            Sisesta nimi: <input type="text" name="nimi"><br>
            <input type="submit" name="sisesta" value="sisesta">
        </form><br>
        <?php
            if(isset($_POST["nimi"])){ // Klikides kuvatakse nimi
                echo ($_POST["nimi"]);
            }
        ?>
        <br>
        <form action "too2.php" method "POST">
            Sisesta esimene arv: <input type="text" name="arv1"><br>
            Sisesta teine arv: <input type="text" name="arv2"><br>
            <input type="submit" name="liida" value="liida arvud"><br>
        </form>
        <?php
            if(isset($_POST["liida"])) { //Nuppu nimi
                $arv1 = ($_POST["arv1"]);
                $arv2 = ($_POST["arv2"]);
                echo ($arv1 + $arv2);
            }
        ?>
        <br>
    </body>
</html>