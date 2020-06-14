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
      /*$this->layout="layout_connexion";*/
      $this->views="creer user";
      $this->render();
   }

   public function loadViewAdmin1(){
      $this->dirname="admin";
      $this->layout="layout_admin";
      $this->views="liste question";
      $this->render();  
   }

   public function loadViewAdmin2(){
        
   }

   public function loadViewAdmin3(){
      $this->dirname="admin";
      $this->layout="layout_admin";
      $this->views="liste joueur";
      $this->render();  
   }
   public function loadViewAdmin4(){
      $this->dirname="admin";
      $this->layout="layout_admin";
      $this->views="creer question";
      $this->render();  
   }


   /*public function loadPageConnexion(){
      ob_start();
      require_once("views/security/se connecter.php");
      $content_for_layout= ob_get_clean();
      require_once("views/layout/layout_connexion.php");
   }*/

    public function index(){
       $this->layout="layout_connexion";
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
            $this->manager=new UserManager();
            $user=null;
            $user=$this->manager->getUserByLoginAndPwd($login,$password);
             if(!empty($user)) {
                //Login et Mot de Passe Correct
                    $this->data['userConnect']=$user;
                      if($user->getProfil()==="admin"){
                        $this->layout="layout_admin";
                        $this->views="creer admin";
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
            //var_dump("Deconnecter");
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

    public function creerUtlisateur(){

    }

    public function creerAdmin(){
        
      $this->layout="layout_admin";
      $this->views="creer admin";
      $this->render();
      if(isset($_POST['btn_inscription'])){
         extract($_POST);
         $this->validator->is_empty($login,'login',"Login Obligatoire");
      }

   }



   }
