<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo 'Hello, world!<br>';
    echo 'Todai is: ' . date('d.m.Y h:i') . '<hr>';

    echo "<hr><br><b>Variables</b><br>"; // Comment 
    echo "float<br>";
    echo "str<br>";
    echo "array<br>";
    echo "bool<br>";
    
    $my_variable = 100;
    $b = 15;
    echo $my_variable . '</br>';
    echo $b . '</br>';
    
    echo "<hr><br><b>Array</b><br>";
    
    $array = array(1,2,3,4,5);
    echo $array[1];
    $answer = $array[1] + $array[2];
    echo '<br>' . $array[1] . ' + ' . $array[2] . ' = ' . $answer . '</br>';

    $f = array(
        'name' => "Abraham",
        'surename' => "Lovo",
        'age' => 20,
        'year' => 1999,
        'education' => array('school in 2004', 'college in 2014'),
        'married' => false,
        'geek' => true
    );

    echo 'Name is: ' . $f['name'] . '<br>';

    echo "<hr><br><b>Concatenation</b><br>";

    $n = 'Al';
    $m = 125;
    echo $n . ' ' . $m;

    echo "<hr><br><b>Condition</b><br>";

    $weather = 'snow';

    if ($weather == 'snow' ){
        echo 'If ' . $weather . ' stay home.</br>';
    }

    if ($weather == 'sun' ){
        echo 'if ' . $weather . ' go for a run.</br>';
    }

    echo "<hr><br><b>Cycle FOR</b><br>";

    for ($i = 1; $i<10;$i++){
        echo "Hello world! </br>";
    }

    for ($i = 1; $i <= 10; $i++) {
        echo $i;

        if($i%2==0){
            echo ' - not odd number.<br>';
        } else{
            echo ' - odd numer<br>';
        }
    }

    echo "<hr><br><b>Cycle WHILE</b><br>";

    $test = 10;
    while($test <= 20){
        echo 'test' . ' ' . '<br>';
        $test ++;
    }

    echo "<hr><br><b>Cycle FOREACH</b></br>";

    $names = array(
        'John', 'Ann', 'Barry', 'Mary'
    );
    foreach ($names as $value){
        echo $value . '</br>';
    }

    echo "<hr><br><b>Function</b></br>";

    function mycode($x, $z){
        echo 'Hi everyone!</br>';
        if ($x > $z){
            echo 'z>x<br/>';
            echo 'x = ' . $x;
            echo 'z = ' . $z;
            echo 'x>z';
            return $x;
        }
        else{
            echo 'z>x<br/>';
            echo 'x = ' . $x;
            echo 'z = ' . $z;
            echo 'x<z';
            return $z;

        }
    }
    mycode(5, 10);

    echo "<hr><br><b>Build-in functions</b></br>";


    echo 'abs = ' . abs(513.3) . '<br/>';
    echo 'round = ' . round(513.3) . '<br/>';
    echo 'ceil = ' . ceil(513.3) . '<br/>';
    echo 'floor = ' . floor(513.3) . '<br/>';
    echo 'rand = ' . rand(0,10) . '<br/>';
    echo 'min = ' . min(3, 15, 85, 12.2, 14) . '<br/>';
    echo 'max = ' . max(3, 15, 85, 12.2, 14) . '<br/>';

?>
</body>
</html>
