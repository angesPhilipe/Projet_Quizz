<div class="container p-0 w-100 m-auto rounded shadow bg-white d-flex justify-content-center align-items-stretch">
          <div class="bg-white col-8 pl-5">
          <section class="border-bottom col-10 mt-3"> 
            <h3 class="w-100 m-0">
              S'inscrire
            </h3>
            <p class="w-100 m-2">
              Pour tester votre niveau de culture génerale
            </p>
          </section>

      <form method="post" id="form-inscription" enctype="multipart/form-data" action="<?= WEBROOT ?>security/creerUser " class="font-weight-bold col-10 p-0">
        <?php
        if (isset($err_login)) {
        ?>
          <small id="fileHelpId" class="form-text text-danger font-weight-bold"><?= $err_login ?></ small>
          <?php
        }
          ?>
          <div class="form-group m-0">
            <label for="formGroupExampleInput" class="m-0">Prénom</label>
            <input type="text" id="prenom" name="prenom" class="form-control" error="error_prenom" placeholder="Entrez votre prénom" style="height: 8%; background-color: #f1f1f1;">
            <small class="text-danger" style="margin-left:15px;" id="error_prenom"></small>
            <?php
            if (isset($errors['prenom'])) {
            ?>
              <small id="fileHelpId" class="form-text text-danger font-weight-bold"><?= $errors['prenom'] ?></ small>
              <?php
            }
              ?>
          </div>
          <div class="form-group m-0">
            <label for="formGroupExampleInput2" class="m-0">Nom</label>
            <input type="text" name="nom" error="error_nom" id="nom" class="form-control" placeholder="Entrez votre nom" style="height: 8%; background-color: #f1f1f1;">
            <small class="text-danger" id="error_nom" style="margin-left:15px;"></small>
            <?php
            if (isset($errors['nom'])) {
            ?>
              <small id="fileHelpId" class="form-text text-danger font-weight-bold"><?= $errors['nom'] ?></ small>
              <?php
            }
              ?>
          </div>
          <div class="form-group m-0">
            <label for="formGroupExampleInput" class="m-0">Login</label>
            <input type="text" name="login" error="error_login" id="pseudo" class="form-control " placeholder="Entrez votre login" style="height: 8%; background-color: #f1f1f1;">
            <small class="text-danger" id="error_login" style="margin-left:15px;"></small>
            <?php
            if (isset($errors['login'])) {
            ?>
              <small id="fileHelpId" class="form-text text-danger font-weight-bold"><?= $errors['login'] ?></ small>
              <?php
            }
              ?>
          </div>
          <div class="form-group m-0">
            <label for="formGroupExampleInput2" class="m-0">Password</label>
            <input type="password" name="pwd1" error="error_password" class="form-control" id="pwd1" placeholder="Entrez votre password" style="height: 8%; background-color: #f1f1f1;">
            <small class="text-danger" id="error_password" style="margin-left:15px;"></small>
            <?php
            if (isset($errors['pwd1'])) {
            ?>
              <small id="fileHelpId" class="form-text text-danger font-weight-bold"><?= $errors['pwd1'] ?></ small>
              <?php
            }
              ?>
          </div>
          <div class="form-group" style="margin-bottom:0px">
            <label for="formGroupExampleInput2" class="m-0">Confirmer Password</label>
            <input type="password" name="pwd2" error="error_confirm" id="confirmPassord" class="form-control" placeholder="Confirmez votre password" style="height: 8%; background-color: #f1f1f1;">
            <small class="text-danger" id="error_confirm" style="margin-left:15px;"></small>
          </div>

          <div class="w-100 d-block mb-2">
            <span class="d-inline text-dark float-left" style="margin-right: 104px;">Avatar</span>
            <label class="btn btn-default btn-file text-white" style="border:solid 0px; background-color:#51bfd0;">
              choisir un Avatar <input type="file" style="display: none;" id="imgUser" name="imgUser">
            </label>
            <small id="error_avatar" class="text-danger"></small>
          </div>


          <div class="d-flex mt-3 ml-5">

            <button style="background-color: #51bfd0;" type="submit" name="btn_inscription" onclick="" class="btn text-white">Creer compte</button>
          </div>
      </form>
  </div>

  <div class="bg-white col-4 pt-4">
    <div class="container rounded-circle" style="height: 150px; width: 150px; border:solid #51bfd0; border-width: 2px;">
      <img style="height: 150px; width: 150px;" id="avatar" class="rounded-circle" src="" alt="">
    </div>

    <p class="text-center w-100">Avatar du joueur</p>
  </div>




  </div>
  <script type="text/javascript">
    const inputs = document.getElementsByTagName("input");
    for (let input of inputs) {
      input.addEventListener("keyup", function(event) {
        if (event.target.hasAttribute("error")) {
          //recuperer la valeur de l'atribut error
          let idSmall = event.target.getAttribute("error")
          //recuperer l'objet small
          const errorSmall = document.getElementById(idSmall)
          errorSmall.innerText = ""
        }
      });
    }

    document.getElementById("form-inscription").addEventListener("submit", function(event) {
      let valid = true;
      for (let input of inputs) {
        if (!input.value.trim()) {
          valid = false;

          if (input.hasAttribute("error")) {
            //recuperer la valeur de l'atribut error
            let idSmall = input.getAttribute("error")
            //recuperer l'objet small
            const errorSmall = document.getElementById(idSmall)
            errorSmall.innerText = "Champ Obligatoire";
          }
        }
      }
      if (valid == false) {
        event.preventDefault();
        return false;
      }
    });

    // Chargement de l'image
    const imgUpload = document.querySelector("#imgUser");

    const prevUpload = () => {
      // recuperation de l'image du champ
      let fileImg = imgUpload.files[0]
      // transformer l'image en flux d'octets
      let reader = new FileReader();
      if (fileImg) {
        reader.readAsDataURL(fileImg)
        reader.onloadend = function() {
          const avatar = document.querySelector("#avatar")
          avatar.src = reader.result

        }
      }
    }




    // ecouteur evenement
    imgUpload.addEventListener("change", prevUpload)
  </script>
</div>