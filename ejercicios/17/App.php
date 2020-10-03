<?php
class App{
    public function __construct($name="Mi Aplicacion PHP"){
        $this->name = $name;
        $this->module = "Desarrollo Web en Entorno Servidor";
        $this->teacher = "Rafael Cabeza";
        $this->student = "Alberto Ortega";
    }
    public function fibonacci(){
        $numero1=0;
        $numero2=1;
        echo "<h1>",'Los números de la sucesión fibonacci menores a 1 millon son: ',"</h1>";
        echo $numero1,", ",$numero2,", ";
        for ($row = 1; $row < 1000000; $row++) {
        
        $suma=$numero1+$numero2;
        $numero1=$numero2;
        $numero2=$suma;
        echo $suma. ", ";
        }
    }
}
?>