<?php

class UserManager extends Manager
{

    function __construct(){
        $this->className="User";
    }

    public function add($objet){
      $sql = "INSERT INTO `User` (`id`, `login`, `pwd`, `profil`, `fullName`, `avatar`) VALUES (NULL, '" . $objet->getLogin() . "', '" . $objet->getPwd() . "', '" . $objet->getProfil() . "', '" . $objet->getFullName() . "','" . $objet->getAvatar() . "');";
       return  $this->ExecuteUpdate( $sql)!=0;
    }

    public function create($data){

    }

    public function update($objet){

    }
    public  function delete($id){
      
    }
    public function findAll(){
      
    }
    public function findById($id){

    }
    
    public function loginExist($login){
        $sql="select * from $this->className where login='$login'";
        $datas=$this->ExecuteSelect($sql);
        return count($datas)==1? $datas[0]:null;   
      }


    public function getUserByLoginAndPwd($login,$pwd){
       $sql="select * from user where login='$login' and pwd='$pwd'";
       $users=$this->ExecuteSelect($sql);
       return $users[0];
    }

}