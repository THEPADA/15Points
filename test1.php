<?php
generateKeys();
function generateKeys() {
$zufallszahl = rand(2,1000);
$i = $zufallszahl-1;
$primtest = false;
//echo "erster Zufall: " . $zufallszahl . "\n";
while($primtest==false){    
    if($i == 1){
        $primtest = true;
        echo "erzeugte Primzahl p : " . $zufallszahl . "\n";
        $p = $zufallszahl;
        break;
    }
    
    
    while($i > 1){
        if(($zufallszahl % $i) != 0 AND $i != 1){
            $i = $i-1;
        }
        if(($zufallszahl % $i)==0 AND $i != 1){
            $zufallszahl = rand(2,1000);
            $i = $zufallszahl -1;
            break;
            
        }
    }
    
}
$zufallszahl2 = rand(2,1000);
$i2 = $zufallszahl2-1;
$primtest2 = false;
//echo "zweiter Zufall: " . $zufallszahl2 . "\n";
while($primtest2==false){    
    if($i2 == 1){
        $primtest2 = true;
        echo "erzeugte Primzahl q : " . $zufallszahl2 . "\n";
        $q = $zufallszahl2;
        break;
    }
    
    
    while($i2 > 1){
        if(($zufallszahl2 % $i2) != 0 AND $i2 != 1){
            $i2 = $i2-1;
        }
        if(($zufallszahl2 % $i2)==0 AND $i2 != 1){
            $zufallszahl2 = rand(2,1000);
            $i2 = $zufallszahl2 -1;
            break;
            
        }
    }
    
}
$n = $p*$q;
//$n = 15;
//$p = 3;
//$q = 5;
echo "n : " . $n . "\n";
$phi = ($p-1)*($q-1);
unset($p);
unset($q);

/* $durchzaehlen1 = 3;
    while ((($phi + 1) % $durchzaehlen1) != 0)
    {
        $durchzaehlen1++;
    }
$d = $durchzaehlen1; */


//echo "d:" . $d;
echo "phi: " . $phi;
$primarray = array(2,3,5,7,11,13,17,19,23,29,31,37,41,43,47,53,59,61,67,71,73,79,83,89,97);
$index = rand(0,24);
while(1==1){
    
    
    $eteiler =$primarray[$index];
    if($phi % $eteiler == 0){
        $index++;
    }
    else{
        $e = $primarray[$index];
        break;
    }
}
$d = $e;
echo "   e: " . $e;
echo "   d: " . $d;
} // Ende generateKeys
?>
