<?php

    require "libs/vars.php" ;
    require "libs/functions.php" ;

    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $baslik = $_POST["baslik"] ;
        $aciklama = $_POST["aciklama"] ;
        $resimurl = $_POST["resimurl"] ;

        filmEkle($baslik,$aciklama,$resimurl,77) ;
        header('Location: test-prod.php') ;

    }

    // filmEkle("yeni film 1","yeni film 1","1.jpeg",25) ;
    // filmEkle("yeni film 2","yeni film 2","2.jpeg",25,69,true) ;

    //shuffle($filmler);

?>
    <?php include "views/_header.php" ?>
    <?php include "views/_navbar.php" ?>

    <div class="container my-3">

        <div class="row">

            <div class="col-3">
                <?php include "views/_menu.php" ?>
            </div>
            <div class="col-9">
                
                <div class="card">

                    <div class="card-body">
                        <form action="create.php" method="POST">
                            <div class="mb-3">
                                <label for="baslik" class="form-label">Başlik</label>
                                <input type="text" class="form-control" name="baslik" id="baslik">
                            </div>

                            <div class="mb-3">
                                <label for="aciklama" class="form-label">Aciklama</label>
                                <textarea type="text" class="form-control" name="aciklama" id="aciklama"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="resimurl" class="form-label">Resim</label>
                                <input type="text" class="form-control" name="resimurl" id="resimurl">
                            </div>

                            <input type="submit" value="Submit" class="btn btn-primary">
                        </form>
                    </div>

                </div>

        
            </div>
        </div>
    </div>
    <?php include "views/_footer.php" ?>