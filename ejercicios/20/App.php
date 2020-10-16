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
        $color=[];
        setcookie("color",serialize ($color),time()+3600);

        include ('views/home.php');
    }
    public function cambio(){
        //$color=unserialize($_COOKIE['color']);
        $color[]=$_POST['color'];
        setcookie('color',serialize ($color),time()+3600);
        
        //var_dump($_POST); 
        //si recoge el texto de la cookie pero nose porque no me ejecuta las opciones
        //Y sigue dando problema con el header location como en el ejercicio anterior.... AYUDAAA!!!!!! :(

        switch ($color){
            case 'azul':?>
                <body id="azul"> <?
            break;
            case 'amarillo':?>
                <body id="amarillo"> <?
            break;
            case 'verde':?>
                <body id="verde"> <?
            break;
            case 'rojo':?>
                <body id="rojo"> <?
            break;
        }
        //include ('views/home.php');
        header('Location: ?method=home');
    }
 
}
