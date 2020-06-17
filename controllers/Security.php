<?php
  class Security extends Controller {

    public function __construct(){
       //Appel au constructeur de la classe Mere
        parent::__construct();

        $this->dirname="security";
        $this->layout="layout_connexion"; 
      session_start();
       
    }

   public function loadViewInscription(){
      $this->views="creer user";
      $this->render();
   }

    public function index(){
       $this->views="se connecter";
       $this->render();
      
    }
    public function seConnecter(){
      
      //extract permet d'extraire les valeurs d'un tableau associatif sur ces clés
       if(isset($_POST['btn_connexion'])){
          //Passer par le Formulaire de Connexion
            extract($_POST);
            $this->validator->is_empty($login,'login',"Login Obligatoire");
            $this->validator->is_empty($password,'password',"Password Obligatoire");
         if($this->validator->is_valid()) {
            
            //Connexion a la Base Donnée
            $this->manager = new UserManager();
            $user=null;
            
            $user=$this->manager->getUserByLoginAndPwd($login,$password);
            
             if(!empty($user)) {
                //Login et Mot de Passe Correct
                    $this->data['userConnect']=$user;
                    $_SESSION['userConnect']=$user;
                      if($user->getProfil()==="admin"){
                        $this->layout="layout_admin";
                        $this->views="creer user";
                        $this->render();
                      }else{
                        $this->layout="layout_connexion";
                        $this->dirname="jeu";
                        $this->views="jouer";
                        $this->render();
                      }
                      
                   
                  
             }else{
                  //Login ou Mot de Passe InCorrect
                        $this->data['err_login']="Login ou Mot de Passe Incorect";
                        //$this->layout="layout_connexion";
                        $this->views="se connecter";
                        $this->render();
             }
           
         }else{
            //Champs non remplis=>Erreur
            $erreurs= $this->validator->getErrors();
            $this->data['erreurs']=$erreurs;
            $this->views="se connecter";
            $this->render();
         }

       }else{
          //Passer par URL
          /*$this->views="se connecter";*/
          $this->index();
          $this->render();
       }
       

       
    }

    public function seDeconnecter(){
         if(isset($_POST['btn_deconnexion'])){
            extract($_POST);
            //Destruction des données utlisateur
            $this->data = [];
            $_SESSION['userConnect'] = [];
            session_destroy();
            unset( $_SESSION['userConnect']);
       //Redirection vers la page de Connexion
            $this->index();
            $this->render();
      }
  }

    public function creerAdmin(){
      if(!empty($_SESSION) && $_SESSION['userConnect']->getProfil() == "admin"){
         $this->layout="layout_admin";
         $this->views="creer user";
         $this->render();
      }elseif(!empty($_SESSION) && $_SESSION['userConnect']->getProfil() == "joueur"){
         $this->layout="layout_connexion";
         $this->views="creer user";
         $this->render();
      }
   }

   public function creerUtil(){
      $this->layout="layout_connexion";
      $this->views="creer user";
      $this->render(); 

   }

   public function creerUser(){
      
      $profil="joueur";
      if(!empty($_SESSION) && $_SESSION['userConnect']->getProfil() == "admin"){
         $profil="admin";
      $this->manager = new UserManager;    
      if(isset($_POST['btn_inscription'])){
         extract($_POST);
         //Valide les Données Obligatoires
          $this->validator->is_empty($login,'login',"Login obligatoire");
          $this->validator->is_empty($pwd1,'pwd1',"Password  obligatoire");
          $this->validator->is_empty($pwd2,'pwd2',"Password  obligatoire");
          $this->validator->is_empty($nom,'nom',"Nom  Obligatoire");
          $this->validator->is_empty($prenom,'prenom',"Prenom  Obligatoire");

          if($this->validator->is_valid()){
            
                 //Validation Password
                 $this->validator->isEqual($pwd1,$pwd2,"pwd2","Les deux Password doivent etre identiques");
                 if($this->validator->is_valid()){
                   //Si le login existe
                   
                   $user=$this->manager->loginExist($login);
                   if($user==null){

                     if ($_FILES["imgUser"] !== null) {
                        $target_dir = "assets/images/upload/";
                        $target_file = $target_dir . basename($_FILES["imgUser"]["name"]); //Affiche le cheminde l'image
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); //Extension de l'image
                        $check = getimagesize($_FILES["imgUser"]["tmp_name"]); //Renvoie les infos dont la taille
                        if ($check !== false) {
                          $nameImg = explode("/", $target_file);
                          $avatar = $nameImg[count($nameImg) - 1];
                          $uploadOk = 1;
                          if (!file_exists($target_file)) {
                            if (!move_uploaded_file($_FILES["imgUser"]["tmp_name"],$target_file)) {
                              $erreurs = "Desole il y a eu une erreur de chargement de votre fichier";
                              $this->data['erreurs'] = $erreurs;
                              $this->creerAdmin();
                            }
                          } else {
                            $erreurs = "renomer l'image";
                            $this->data['erreurs'] = $erreurs;
                            $this->creerAdmin();
                            $uploadOk = 0;
                          }
                        } else {
                          $erreurs = "File is not an image.";
                          $this->data['erreurs'] = $erreurs;
                          $this->creerAdmin();
                          $uploadOk = 0;
                        }
                      }
                       //Tout se passe bien
                       $compteUser=new User();
                       $compteUser->setLogin($login);
                       $compteUser->setPwd($pwd1);
                       $compteUser->setfullName($prenom." ".$nom);
                       $compteUser->setProfil($profil);
                       $compteUser->setAvatar($avatar);
                       
                        $result=$this->manager->add($compteUser);
                        
                        if($result){
                            $this->data['err_login']= "Compte Créé avec Succes";
                            $this->creerAdmin();
                        }
                       
                   }else{
                       $this->data['err_login']= "Login Existe Déja";
                       $this->creerAdmin();
                   }
                  
                 }else{
                    $errors=$this->validator->getErrors();
                    $this->data['errors']= $errors;
                    $this->creerAdmin();
                 }
                   
          }else{
           
                $errors=$this->validator->getErrors();
                $this->data['errors']= $errors;
                $this->creerAdmin();
               
            }

         }
      

   }


   }
}
