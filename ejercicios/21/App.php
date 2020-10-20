<?php
class App{
    public function __construct(){
     session_start();
    }

    public function run()
    {
      if (isset($_GET['method'])) {
        $method = $_GET['method'];
      }else {
        $method = 'login';
      }
      $this->$method();      
    }


    public function login()
    { 
      if($_SESSION['usuario'] && $_SESSION['pass']){
        header('Location: ?method=home');
      }else{
        include ('views/login.php');
        }
    }

    public function auth()
    {
      $_SESSION['usuario']=$_POST['usuario'];
      header('Location: ?method=home');
    }
    
    public function home()
    {
      include ('views/home.php'); 
    }
    public function new()
    {
       $deseos[]=$_POST['newDeseo'];
       $_SESSION['deseos']=$deseos; 

       header("Location: ?method=home");;
    }
    
    public function delete()
    {
      $id=$_GET['id'];
      unset($_SESSION['deseos'][$id]);
      header("Location: ?method=home");
    }
    public function empty()
    {
      unset($_SESSION['deseos']);
      header("Location: ?method=home");

    }
    public function close()
      {
      session_destroy();
      header('Location: index.php');
    }
}