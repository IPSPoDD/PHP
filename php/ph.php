<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>PHP harjutus</title>
    </head>
    <body>
        <?php   
        /* kommentaar
        mittu realine
        */
        
        # Üherealine kommentaar
        // Üherealine kommentaar
        
        // Lehele kuvamine
        echo 'Tere-tere!';
        echo '<hr>';
        echo "<h1>Heading!</h1>";
        echo '<hr>';
        echo "<p>Mingi sisu</p>";
        ?>
    <br>
    <?php 
        // Muutujad
        $nimi = 'Alex';

        echo "<p>Tere $nimi õpid PHPd!</p>";

        // Andmetüübid - 4 tükki
        // int, float, str, boolean
        echo "siin";
        
        // Str
        $fraas = "Tere, tere, vana kere!";
        echo $fraas . "<br>";
        echo strtoupper($fraas) . "<br>"; // Koik suured tahed
        echo strlen($fraas); // Str pikkus

        // Uhe tahe voi mittu kuvamine
        echo substr($fraas, 0, 4) . '<br>'; // Esimene arv kust, teine - kui palju
        echo str_replace("kere", "keha", $fraas) . '<br>';

        // Numbrid
        echo 6+4 . '<br>';
        echo (6+4)*10 . '<br>';

        $number = 10;
        $number ++;
        echo "Number: " . $number ++ . '<br>';

        // Ruutjuur
        echo sqrt(9) . '<br>';
        echo round(5.3) . '<br>';

        // Massiiv
        $nimed = array('Mia', 'Peeter', 'Kullo', 'Zoja'); // Koik andme tuubid
        $nimed[2] = 'Roman';
        echo $nimed[2] . '<br>';

        echo "Kokku on " . count($nimed) . " nime." . '<br>';

        echo implode(', ',$nimed) . '<br>'; // Massiivi printimene komadega
        
        // Associativo array ehk uhenduv massiiv
        $hinded = array('Mia' => 2, 'Peeter' => 3, 'Kullo' => 4, 'Zoja' => 5); // Nimi on voti(primary)
        echo $hinded['Mia'] . "<br>";

        // Funktsioonide loomine
        function tere() {
            echo "Tere, kasutaja!";
        }

        tere(); // Kutsume funktsiooni

        function tere2($nimi, $vanus){
            echo '<br>' . "Tere, $nimi! Sa oled $vanus aastane" . '<br>';
        }
        tere2('Maria', 45);

        // If, else, elseif
        
        $arv = 3;
        if($arv > 0){
            echo "Positiivne" . "<br>";
        }
        elseif($arv == 0){
            echo "Tegemist on nulliga" . "<br>";
        }
        else{
            echo "Arv on negatiivne!" . '<br>';
        }

        // Switch ja case
        $hinne = 5;
        switch($hinne) {
            case 5:
                echo "Suureparane" . '<br>';
                break;
            case 4:
                echo "Hea" . '<br>';
                break;
            case 3:
                echo "Rahuldav" . '<br>';
                break;
            case 2:
                echo "Halb" . '<br>';
                break;
            case 1:
                echo "Kasin" . '<br>';
                break;
            default:
                echo "Pole sobilik number" . '<br>';
        }

        // Tsukkel
        $index = 5;
        while($index < 10){
            echo $index . '<br>';
            $index ++;
        }

        for($i = 1; $i<5; $i++){
            echo "I = " . $i . '<br>';
            
        }

        //Klassid
        class Raamat{
            var $pealkiri;
            var $autor;
            var $lehed;
        }
        $r1 = new Raamat;
        $r1->pealkiri = "Tode ja Oigus";
        $r1->autor = "Tammsaare";
        $r1->lehed = 700;

        echo $r1->autor;
    ?>

    </body>
</html>