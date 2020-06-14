
    <div class="container col-7 bg-white m-2 text-muted font-weight-bold" >
        <h2 class="w-100 pl-5">
          S'inscrire
        </h2>
        <p class="w-100 pl-5 mt-0">
          Pour tester votre niveau de culture génerale
        </p>

        <form method="post" action="<?=WEBROOT?>security/creerAdmin" class="col-10 p-0 pl-5">
          <div class="form-group"> 
            <label for="formGroupExampleInput">
              Prénom
            </label>
            <input type="text" class="form-control" id="" placeholder="Entrez votre prénom" style="height: 7%; background-color: #f1f1f1;" >
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">
              Nom
            </label>
            <input type="text" class="form-control" id="" placeholder="Entrez votre nom" style="height: 7%; background-color: #f1f1f1;">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">
              Login
            </label>
            <input type="text" class="form-control " name="login" id="" placeholder="Entrez votre login" style="height: 7%; background-color: #f1f1f1;">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">
              Password
            </label>
            <input type="text" class="form-control" name="login" id="" placeholder="Entrez votre password" style="height: 7%; background-color: #f1f1f1;">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">
                Confirmer Password
            </label>
              <input type="text" class="form-control" name="login" id="" placeholder="Confirmez votre password" style="height: 7%; background-color: #f1f1f1;">
          </div>
          <div class="w-100 d-block">
                <span class="d-block text-dark ">
                    Avatar
                </span>
                <input type="file" accept="image/png , image/jpeg" name="" id="" class="float-left rounder-sm text-white mb-1" style="overflow:hidden; float:left;
                margin-top: 10%;">
            </div>
          
          <div class="mt-0 d-flex col-6 ml-5 mb-2 float-right" style="width: 75%; height: 45%;">
                <button type="submit" name="btn_inscription" value="" class="btn bgcolor1 border-bgcolor1 text-white font-weight-bold shadow-sm" >
                    Créer compte
                </button>
          </div>
        </form>
    </div>



    <div class="container col-5 p-5 text-center font-weight-bold ml-0 mt-2">
        <div class="container bg-dark rounded-circle" style="height: 180px; width: 180px; border: solid 10px grey;">

        </div>
        Avatar Admin
    </div>