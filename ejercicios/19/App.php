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
      }else {
        $method = 'login';
      }
      $this->$method();      
    }


    public function login(){ 
      if($_COOKIE['usuario'] && $_COOKIE['pass']){
        header('Location: ?method=home');
      }else{
        include ('views/login.php');
        }
    }

    public function auth(){
      $nombre=$_POST['usuario'];

      setcookie('usuario', $nombre,time()+3600);
      //var_dump($_POST);
      header('Location: ?method=home');
    }
    
    public function home(){
      if(isset($_COOKIE['deseos'])){
        $deseos=unserialize($_COOKIE['deseos']);
      }else{
        $deseos=array();
      }
  
      include ('views/home.php'); 
    }
    public function new(){
       $deseos=unserialize($_COOKIE['deseos']);
       $deseos[]=$_POST['newDeseo'];
       setcookie('deseos',serialize($deseos),time()+10);
       
       header("Location: ?method=home");;
    }
    //esta mal
    public function delete(){
      $deseos=unserialize($_COOKIE['deseos']);
      
      foreach($deseos as $deseo){
        if($deseo==$_POST['eliminar']){
          unset($deseo);
        }
      }

      header("Location: ?method=home");
    }
    public function empty(){
      unset($_COOKIE['deseos']);
      setcookie('deseos','',time()-1);
       
      header("Location: ?method=home");

    }
    public function close(){
      if($_COOKIE['usuario']){
        unset($_COOKIE['usuario']);
        setcookie('usuario','',time()-1);
      }
      header('Location: index.php');
    }
}
