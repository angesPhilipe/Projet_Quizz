
<?php
    require_once('inc/header.inc.php')
?>
<div class="p-0 container-fluid justify-content-center align-items-center">       
        <div class="container-fluid fixed-top fixed-bottom bg-colorA-opac15" style="z-index:0;">

        </div>
        <div class="container-fluid w-100 p-2 bg-colorB" style="z-index:1030; top: 0;">
            <h1 class="text-center text-white w-100 p-2">
                Le plaisir de jouer
            </h1>
        </div>

            <?php
                echo $content_for_layout;
            ?>

    </div>
<?php
    require_once('inc/footer.inc.php')
?>