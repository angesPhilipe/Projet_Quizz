<?php
  class Admin extends Controller {

    public function __construct(){
       //Appel au constructeur de la classe Mere
        parent::__construct();

        $this->dirname="admin";
        $this->layout="layout_admin"; 
      session_start();
       
    }

    public function listeQuestion(){
        $this->views="liste question";
        $this->render();  
    }

    public function listeJoueur(){
        $this->views="liste joueur";
        $this->render();  
     }
     public function creerQuestion(){
        $this->views="creer question";
        $this->render();  
     }



}