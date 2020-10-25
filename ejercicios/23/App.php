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
       // $deseos=fopen("views/deseos.txt","r");
        
        //header("Location: ?=method home.php");
    }
    public function escribirDeseo(){

    }
}