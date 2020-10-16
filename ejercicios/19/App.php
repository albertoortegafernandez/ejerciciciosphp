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
        $deseos=['Ir al cine','Comer en restaurante','Ver partido del Real Zaragoza'];
        setcookie("deseos",serialize($deseos),time()+3600);

        include ('views/home.php');
        
    }

    //esta mal
    public function new(){
       
       $deseos=unserialize($_COOKIE['deseos']);
       $deseos[]=$_POST['newDeseo'];
       setcookie("deseos",serialize($deseos),time()+3600);
       
       header('Location: ?method=home');
       
    }
    //esta mal
    public function delete(){
      $deseos[]= $_POST['eliminar'];

      unset($_COOKIE['eliminar']);
      setcookie('eliminar','',time()-1);

      include ('views/home.php');
    }
    public function empty(){
        unset($_COOKIE['deseos']);
        setcookie('deseos','',time()-1);
        setcookie('deseos2','',time()-1);
      include ('views/home.php');

    }
    public function close(){
      if($_COOKIE['usuario']){
          //unset($_COOKIE['usuario']);
          //unset($_COOKIE['pass']);
          setcookie('usuario','',time()-1);
          
      }
      header('Location: index.php');
    }
}
