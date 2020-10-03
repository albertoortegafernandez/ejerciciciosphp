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
        echo "<h2>",'Los números de la sucesión fibonacci menores a 1 millon son: ',"</h2>";
        echo $numero1,", ",$numero2,", ";
        for ($row = 1; $row < 1000000; $row++) {
            $suma=$numero1+$numero2;
            $numero1=$numero2;
            $numero2=$suma;
                if ($suma<1000000){
                    echo $suma. ", ";
                }
        
        }
    }
    public function potencias2(){
        echo "<h2>",'Las potencias de 2 hasta 2 elevado a 24 son: ',"</h2>";
    }
    public function factoriales(){
        echo "<h2>",'Los números factoriales mas proximos al millón son : ',"</h2>";
    }   
    public function primos(){
        echo "<h2>",'Los números primos entre 1 y 10.000 son: ',"</h2>";
    }
}
?>