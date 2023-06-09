<?php

    require "libs/vars.php" ;
    require "libs/functions.php" ;

    filmEkle($filmler,"yeni film 1","yeni film 1","1.jpeg",25) ;
    filmEkle($filmler,"yeni film 2","yeni film 2","2.jpeg",25,69,true) ;

    //shuffle($filmler);

?>
    <?php include "views/_header.php" ?>
    <?php include "views/_navbar.php" ?>

    <div class="container my-5">

        <div class="row">

            <div class="col-3">
                <?php include "views/_menu.php" ?>
            </div>
            <div class="col-9">
                <?php include "views/_title.php" ?>
            <?php include "views/_blog-list.php" ?>
        
            </div>
        </div>
    </div>
    <?php include "views/_footer.php" ?>