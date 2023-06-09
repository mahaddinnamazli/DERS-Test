<?php
     session_start() ;
    const baslik = "Populer Filmler" ;
    const user = array(
        "username" => "Mahaddin",
        "password" => "12345",
        "name"     => "Mahaddin Namazli"
         );
    
    $kategoriler = array("Macera","Dram","Komedi","Korku") ;

    $filmler = array(
        "1" => array(
            "baslik" => "Paper Lives",
            "aciklama" => "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)",
            "resim" => "1.jpeg",
            "yorumSayisi" => "0",
            "begeniSayisi" => "106",
            "vizyon" => true,
            "url" =>"Paper Lives"
        ) ,

        "2" => array(
            "baslik" => "Walking Dead",
            "aciklama" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
            "resim" => "2.jpeg",
            "yorumSayisi" => "2",
            "begeniSayisi" => "1032",
            "vizyon" => false,
            "url" =>"Walking Dead"
        ),

        "3" => array(
            "baslik" => "Walking Dead",
            "aciklama" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
            "resim" => "3.jpeg",
            "yorumSayisi" => "196",
            "begeniSayisi" => "2016",
            "vizyon" => true,
            "url" =>"Walking Dead"
        ),

    ) ;
    
    
    $ozet = count($kategoriler). " kategoride ". count($filmler). " film listelenmistir" ;
    
    if(isset($_SESSION["filmler"]) and (count($_SESSION["filmler"]) > count($filmler))) {
        $filmler = $_SESSION["filmler"] ;
    }else {
        $_SESSION["filmler"] = $filmler ;
    }

    
?>