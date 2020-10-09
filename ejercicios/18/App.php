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

        include ('views/login.php');
    }

    public function auth(){
        $nombre=$_POST['nombre'];
        $pass=$_POST['pass'];

        setcookie('nombre', $nombre,time()+350);
        setcookie('pass', $pass,time()+350);
        //var_dump($_POST);
        header('Location: ?method=home');
    }

    public function home(){
        echo '<h1>Bienvenido al home </h1>'.'<br><br>';

        echo '<a href="views/login.php">Cierre Sesion</a>';
        
    }




}
