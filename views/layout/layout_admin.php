<?php
    require_once('inc/header.inc.php')
?>
        <div class="p-0 container-fluid ">
            <div class="container-fluid fixed-top fixed-bottom bg-colorA-opac15" style="z-index:0;">    

            
            </div>

            <div class="container-fluid w-100 p-2 bg-colorB" style="z-index:1030; top: 0;">
                <h1 class="text-center text-white w-100 p-2">
                    Le plaisir de jouer
                </h1>
            </div>

            <div class="container p-0 d-flex align-items-start col-11 fixed-bottom fixed-top rounded shadow-sm bg-white" style="top: 13%; bottom: 1%;">

                <div class="w-100 d-flex justify-content-center align-items-center bgcolor1 rounded-top p-2">
                    <div class="col-9 float-right">
                        <h3 class="text-white font-weight-bold float-right m-0 p-3">
                            CREER ET PARAMETRER VOS QUIZZ
                        </h3>
                    </div>
                    <div class="col-3">
                        <form method="post" action="<?=WEBROOT?>security/seDeconnecter">
                            <button type="submit" name="btn_deconnexion" value="" class="btn float-right text-white bg-colorC border-top shadow" style="text-shadow: 1px 1px 2px black;">
                                Deconnexion
                            </button>
                        </form>
                    </div>
                </div>



                <div class="position-absolute row container w-100 m-0 d-flex justify-content-center align-items-center col-12 shadow-sm border-none" style="top: 9%; left: 0; right: 0; bottom: 0;">

                    <div class="position-relative container p-0 w-100 m-auto col-3 rounded shadow bg-white" style="height: 55%;">
                        <div class="container w-100 bg-dark rounded-top d-flex align-items-center justify-content-center" style="height: 50%; background: linear-gradient(0deg, rgba(81,191,208,1) 0%, rgba(255,255,255,1) 100%);">
                            <div class="container bg-dark rounded-circle m-2" style="height: 120px; width: 120px; border: solid 3px #51bfd0;">

                            </div>
                            <h4 class="font-weight-bold text-white m-0 p-0">Nom USER</h4>
                        </div>
                        <div class="nav flex-column nav-pills m-auto" role="tablist" aria-orientation="vertical">
                            <a class="nav-link rounded-0 color5" href="<?=WEBROOT?>security/loadViewAdmin1" role="tab" style="height: 10%;">Lister Questions</a>
                            <a class="nav-link rounded-0 color5" href="<?=WEBROOT?>security/creerAdmin" role="tab" style="height: 10%;">Créer Admin</a>
                            <a class="nav-link rounded-0 color5" href="<?=WEBROOT?>security/loadViewAdmin3" role="tab" aria-selected="false" style="height: 10%;">Lister Joueurs</a>
                            <a class="nav-link rounded-0 color5" href="<?=WEBROOT?>security/loadViewAdmin4" role="tab" style="height: 10%;">Créer Questions</a>
                        </div>
                    </div>

                    <div class="container col-7 w-100 bg-white rounded p-0 d-flex" style="top: 2%; bottom: 1.5%; height: 89%; box-shadow: 1px 1px 3px 3px lightgrey; overflow-x: hidden;">
                         <?php
                            echo $content_for_layout;
                        ?>
                    </div>
                </div>

            </div>

        </div>
<?php
    require_once('inc/footer.inc.php')
?>