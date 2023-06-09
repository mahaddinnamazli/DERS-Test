<?php



    $mesaj = "My names Agagababab \$deyer";



    #echo strlen($mesaj)."<br>" ;

    echo $mesaj[1]."<br>" ;
    echo str_word_count($mesaj)."<br>" ;
    echo lcfirst($mesaj)."<br>" ;
    echo lcfirst($mesaj)."<br> <br>" ;


    echo var_dump(is_float(1)) ; echo "<br>" ;


    echo abs(-200) ; echo "<br>" ; echo round(5.5) ; echo "<br>" ; echo sqrt(65) ; echo "<br>" ; echo pow(4,3) ; echo "<br>" ;

    const password = 123456 ;

    echo password ; echo "<br>" ;

    define("Baglanti","mssql") ;

    echo Baglanti ; echo "<br>" ;echo "<br>";echo "<br>";echo "<br>";

    $sayilar = array(1,2,3,4,5,6,7) ;

    foreach ($sayilar as $say) {
        echo $say."<br>" ;
    }

    echo "<br>";echo "<br>";echo "<br>";echo "<br>"; echo "<hr>";

    $string = "Tom,John,Yory,Dweny";

    $other= explode(",",$string) ;

    echo $other[0]."<br>";
    
    foreach ($other as $b) {
        echo $b."<br>" ;
    }

    

?>