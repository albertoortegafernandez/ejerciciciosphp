<?php
class App{
    public function __construct(){
        session_start();
    }

    public function run()
    {
      if (isset($_GET['method'])) {
        $method = $_GET['method'];
      } else {
        $method = 'home';
      }
      $this->$method();      
    }


    public function home(){
        include ('views/home.php');
    }
    public function cambio(){
        //var_dump($_POST);exit();
       /* if($_POST['rojo']){
            $_SESSION['color']=$_POST['rojo'];  
        }else if($_POST['amarillo']){
            $_SESSION['color']=$_POST['amarillo'];
        }else if($_POST['azul']){
            $_SESSION['color']=$_POST['azul'];
        }else if($_POST['verde']){
            $_SESSION['color']=$_POST['verde'];
        }*/
        $_SESSION['color']=$_POST['color'];
        header('Location: ?method=home');
    }
 
}
