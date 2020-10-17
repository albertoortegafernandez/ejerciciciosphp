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
        $method = 'home';
      }
      $this->$method();      
    }


    public function home(){
        if(isset($_COOKIE['color'])){
            $color=unserialize($_COOKIE['color']);
          }else{
            $color=array();
          }
        include ('views/home.php');
    }
    public function cambio(){
        unset($_COOKIE['color']);
        setcookie('color','',time()-1);
        if($_POST['rojo']){
            $color[]=$_POST['rojo'];
            setcookie('color',serialize($color),time()+3600);
        }else if($_POST['amarillo']){
            $color[]=$_POST['amarillo'];
            setcookie('color',serialize($color),time()+3600);
        }else if($_POST['azul']){
            $color[]=$_POST['azul'];
            setcookie('color',serialize($color),time()+3600);
        }else if($_POST['verde']){
            $color[]=$_POST['verde'];
            setcookie('color',serialize($color),time()+3600);
        }
        
        header('Location: ?method=home');
    }
 
}
