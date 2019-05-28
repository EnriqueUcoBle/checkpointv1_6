<?php
class UserSession{
    public function _contruct(){
        session_start();
    }
    public function setCurrentUser($id,$user,$tipo){
        $_SESSION['user']=$user;
        $_SESSION['id']=$id;
        $_SESSION['tipo']=$tipo;

    }
     public function getCurrentUser(){
      return  $_SESSION;
    }
    public function closeSession(){
        session_unset();
        session_destroy();
    }

}
?>