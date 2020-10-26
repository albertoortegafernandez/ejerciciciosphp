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
      $archivo=fopen("views/deseos2.txt","r");
      include ('views/home.php');
      fclose($archivo);
    }
    public function new(){
      $archivo=fopen("views/deseos2.txt","a");
      $nuevo=$_POST['newDeseo'];
      fwrite($archivo,$nuevo .PHP_EOL);
      fclose($archivo);
      header('Location: ?method=home');
    }
  
}