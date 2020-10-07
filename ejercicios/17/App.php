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
        $method = 'index';
      }
      $this->$method();      
    }
    public function index()
    {
      // echo "Estamos en el index<br>";
      include('views/index.php');
    }
    public function fibonacci(){
        $fibonacci=[];
        $numero1=0;
        $numero2=1;
        $suma=0;

        $fibonacci[]=$numero1;
        $fibonacci[]=$numero2;
        
         while($suma<1000000){
          $suma=$numero1+$numero2;
          $fibonacci[]=$suma;
          $numero1=$numero2;
          $numero2=$suma;
        }
        include ('views/fibonacci.php');
    }
    public function potencias2(){
        $potencias=[];
        //echo "<h2>",'Las potencias de 2 hasta 2 elevado a 24 son: ',"</h2>";
        for($i=1;$i<=24;$i++){
            $potencias[]=pow(2,$i);
            
        }
        include('views/potencias2.php');
    }

    public function factoriales(){
        $factoriales=[];
        $factorial=1;
        //echo "<h2>",'Los números factoriales mas proximos al millón son : ',"</h2>";
        for($i=1;$i<1000000;$i++){
            $factorial=$factorial +$i;
            if($factorial<1000000){
                $factoriales[]=$factorial;
            }        
        }
        include('views/factoriales.php');
    }   
    public function primos(){
        //echo "<h2>",'Los números primos entre 1 y 10.000 son : ',"</h2>";
        $primos=[];
        $primero=1;
        $ultimo=10000;
        for($i=1;$i<=$ultimo;$i++){
          $contador=0;
          for($j=1;$j<=$i;$j++){
            if($i%$j==0){
              $contador++;
            }
          }
          if($contador<=2){
            $primos[]=$i;
          }
        }
        include ('views/primos.php');
    }

}
?>