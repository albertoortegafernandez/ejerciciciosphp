<?php
class App{
    public function __construct($name="Mi Aplicacion PHP"){
        $this->name = $name;
        $this->module = "Desarrollo Web en Entorno Servidor";
        $this->teacher = "Rafael Cabeza";
        $this->student = "Alberto Ortega";
    }

    public function run()
    {
      if (isset($_GET['method'])) {
        $method = $_GET['method'];
      } else {
        $method = 'login';
      }
      $this->$method();      
    }


    public function login(){ 
        if($_COOKIE['usuario']&&$_COOKIE['pass']){
          include ('views/home.php');
        }else{
        include ('views/login.php');
        }
    }

    public function auth(){
        $nombre=$_POST['usuario'];
        $pass=$_POST['pass'];

        setcookie('usuario', $nombre,time()+350);
        setcookie('pass', $pass,time()+350);
        //var_dump($_POST);
        header('Location: ?method=home');
    }

    public function home(){
        include ('views/home.php');
    }

    public function logout(){
      if($_COOKIE['usuario']&&$_COOKIE['pass']){
          unset($_COOKIE['usuario']);
          unset($_COOKIE['pass']);
          setcookie('usuario','',time()-1);
          setcookie('pass','',time()-1);
      }
      header('Location: index.php');
    }



}
