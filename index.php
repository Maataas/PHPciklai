<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #word-wrap{
        word-wrap: break-word;
    }

    .red{
        color: red;
    }

    .row{
       line-height: 8px; 
    }

</style>
<body>

    <?php

    echo "1. Naršyklėje nupieškite linija iš 400 “*”. 
    Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
    Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”";

    echo '<p id="word-wrap">';

    for ($i=0; $i < 400; $i++) { 
        echo "*";
    }

    echo "</p>";

    echo "<p>";

    for ($i=1; $i < 401; $i++) { 
        echo "*";
        if($i % 50 == 0 && $i != 400){
            echo "</p><p>";
        }
    }

    echo "</p>";
    echo "<hr>";

    echo "2. Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos.";

    echo "<p>";
    $cnt = 0;

    for ($i=0; $i <300 ; $i++) { 
        $rand2 = rand(0,300);
        if( $rand2 > 150){
             $cnt++;
        }
        if($rand2 > 275){
            echo "<span class='red'>" . " ".  $rand2 . "</span>";
        }else{
            echo " " . $rand2 . " ";
        }
    }

    echo "<p>" . "Skaičių didesnių už 150 yra" . " " . $cnt . "</p>";

    echo "</p>";
    echo "<hr>";

    echo "3.Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.";

    $rand31 = rand(3000,4000);
    $text = "";

    for ($i=0; $i < $rand31 ; $i++) { 
        if($i % 77 == 0){
            $text .= $i . ", ";
        }
    }

    echo "<p>" . substr($text,0,-2) . "</p>";

    echo "<p>" . "Atsitiktinis skaičius" . " " . $rand31 . "</p>";
    echo "<hr>";

    echo "4. Nupieškite kvadratą iš “*”, kurio kraštines sudaro 10 “*”. Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.";

    echo "<br>";
    echo "<br>";

    for ($i = 0; $i < 10 ; $i++) { 
        $row = "";
        for ($a = 0; $a < 10 ; $a++) { 
            $row .= "*";
        }
        echo   '<div class="row">' . $row .'</div>';  
    }

    echo "<hr>";

    echo "6. Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. Suprogramuokite tris skirtingus scenarijus kai monetos metimą stabdome:
    a) Iškritus herbui;
    b) Tris kartus iškritus herbui;
    c) Tris kartus iš eilės iškritus herbui;";

    while (true) {
        $sansas = rand(0,1);
        if($sansas == 1){
            echo "<p>" . "S" . "</p>";
        }else{
            echo "<p>" . "H" . "</p>";
            break;
        }
    }

    echo "<hr>";

    $count61 = 0;

    while (true) {
        $sansas = rand(0,1);
        if($sansas == 1){
            echo "<p>" . "S" . "</p>";
        }else{
            echo "<p>" . "H" . "</p>";
            $count61++;
        }
        if($count61 == 3){
            break;
        }
    }

    echo "<hr>";

    while (true) {
        $sansas = rand(0,1);
        if($sansas == 1){
            echo "<p>" . "S" . "</p>";
            $count61 = 0;
        }else{
            echo "<p>" . "H" . "</p>";
            $count61++;
        }
        if($count61 == 3){
            break;
        }
    }

    echo "<hr>";

    echo "7. Kazys ir Petras žaidžiai Bingo. Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”. Taškų kiekį generuokite funkcija ​rand()​. Žaidimą laimi tas, kas greičiau surenka 222 taškus. Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų. Nenaudoti cikle break.";

    $PetrasCount = 0;
    $KazysCount = 0;
    $shoudPlay = true;

while ($shoudPlay){
    
    $Petras = rand(10,20);
    $Kazys = rand(5,25);
    $PetrasCount += $Petras;
    $KazysCount += $Kazys;
    echo "<p>" . "Petras " . $Petras . " , Kazys " . $Kazys . "</p>";

    if($PetrasCount >= 222 || $KazysCount >=222){
        $shoudPlay = false;
    }
}

if($PetrasCount < $KazysCount){
    echo "<p>" . "Žaidimą laimėjo: Kazys, surinko " . $KazysCount . " tašką(ų)" . " , Petras" . " " .  $PetrasCount . "</p>";
}else{
    echo "<p>" . "Žaidimą laimėjo: Petras, surinko " . $PetrasCount . " tašką(ų)" . " , Kazys" . " " . $KazysCount . "</p>";
}

    echo "<hr>";

    echo "10. Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į lentą).
    “a) Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia smūgių.
    “b) Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti), kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių.";

    for ($i = 0; $i < 5; $i++) {

        $nailDepth = 0;
        $taukstCount = 0;
    while ($nailDepth < 85) {
        $taukst = rand(5,20);
        $nailDepth += $taukst;
        $taukstCount++;
    }
    
    echo "<p>" . ($i + 1) . " - asis vinis buvo įkaltas " . $taukstCount . " smūgiais. Gylis - " .  $nailDepth . "</p>";
    }

    echo "<hr>";

    for ($i = 0; $i < 5; $i++) {

        $nailDepth = 0;
        $taukstCount = 0;
    while ($nailDepth < 85) {
        if(rand(0,1)){
        $taukst = rand(20,30);
        $nailDepth += $taukst;
        }
        $taukstCount++;
    }
    
    echo "<p>" . ($i + 1) . " - asis vinis buvo įkaltas " . $taukstCount . " smūgiais. Gylis - " .  $nailDepth;
    }

    echo "<hr>";

    echo "11. Sugeneruokite stringą, kurį sudarytų 50 atsitiktinių skaičių nuo 1 iki 200, atskirtų tarpais. Skaičiai turi būti unikalūs (t.y. nesikartoti). Sugeneruokite antrą stringą, pasinaudodami pirmu, palikdami jame tik pirminius skaičius (t.y tokius, kurie dalinasi be liekanos tik iš 1 ir patys savęs). Skaičius stringe sudėliokite didėjimo tvarka, nuo mažiausio iki didžiausio.";

    $text = "";
    for ($i=0; $i < 50; $i++) { 
        $rnd = rand(1,200);
        if(strpos($text,$rnd) == false){
            $text .= $rnd . " ";
        }else{
            $i--;
        }
    }
    echo "<p>" . $text . "</p>";

    echo "<hr>";

    $numbers = explode(" ", $text);
    array_pop($numbers);
    print_r($numbers);
    echo "<hr>";

    $text = "";
    $arr2 = [];
    for ($i=0; $i < count($numbers) ; $i++) { 
       if($numbers[$i] % 2 == 0){
            $arr2[] = $numbers[$i];
       }
    }

    print_r($arr2);
    echo "<hr>";

    //sort($arr2);

    for ($i=0; $i < count($arr2); $i++) { 
        for ($a=$i; $a < count($arr2) ; $a++) { 
            if($arr2[$i] < $arr2[$a]){
                $temp = $arr2[$i];
                $arr2[$i] = $arr2[$a];
                $arr2[$a] = $temp;
            }
        }
    }

    print_r($arr2);
    echo "<hr>";
    

    








    


    



    




    ?>
</body>
</html>