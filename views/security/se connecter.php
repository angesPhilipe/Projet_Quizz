<div class="d-block p-0 col-4 bg-white ml-auto mr-auto font-weight-bold rounded shadow-sm" style="z-index:1; margin-top: 5%;">
                <h2 class=" m-0 col-12 text-white w-100 bgcolor1 rounded-top" style="font-size: 20px;">
                    <p class="p-4 bgcolor1">Login Form</p>
                </h2>
                <?php
                    if(isset($err_login)){
                ?>
                    <small id="helpId" class="text-danger"><?=$err_login?></small>
                <?php
                    }
                ?>
                <form method="post" action="<?=WEBROOT?>security/seConnecter">
                    <div class="m-4 pb-2">
                        <div class="form-group">
                            <input type="text" class="form-control" name="login" placeholder="Login" style="height: 60px; background-color: #f1f1f1;">
                        <?php
                            if(isset($erreurs['login'])){
                        ?>
                             <small id="helpId" class="text-danger"><?=$erreurs['login']?></small>
                         <?php
                          }
                        ?>
                        </div>
                
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="" placeholder="Password" style="height: 60px; background-color: #f1f1f1;">
                        <?php
                           if(isset($erreurs['password'])){
                        ?>
                            <small id="helpId" class="text-danger"><?=$erreurs['password']?></small>
                         <?php
                          }
                        ?>
                    </div>
                    <div class="mb-5">
                        <button type="submit" name="btn_connexion" id="" class="mr-5 btn bgcolor1 text-white" style="height: 50px; width:140px;">
                            Connexion
                        </button>
                        <a href="<?=WEBROOT?>security/loadViewInscription" class="text-black-50">
                            S'inscrire pour jouer?
                        </a>
                    </div>
                </form>
</div>