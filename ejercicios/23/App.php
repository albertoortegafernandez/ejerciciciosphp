<?php
class App{
    public function __construct(){
    
    }

    public function run()
    {
      if (isset($_GET['method'])) {
        $method = $_GET['method'];
      }else {
        $method = 'home';
      }
      $this->$method();      
    }
    public function home()
    {
        include ('views/home.php');
    }
    public function abrirDeseos(){
        $abrir=fopen("deseos.txt","r");
        if(!$abrir=fopen("deseos.txt","r")){
            echo "No podemos leer tu lista de deseos";
        }else{
            echo $abrir;
        }
        header("Location: ?=method home.php");
    }
    public function escribirDeseo(){

    }
}