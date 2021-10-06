<?php

/* Jorge A. Ramirez Martinez IDGS 9-2
    05/10/2021
    Prueba de examen #1
*/

class PersonaIMC{
    public $nombre;
    public $peso;
    public $estatura;
    
    public function calcularIMC($nombre, $peso, $estatura){
        $resultado = ($peso / ($estatura * $estatura));
        
        if($resultado < 18.5)
        {
            echo ($nombre . " Usted es delgado o bajo de peso");

        } 
        else if($resultado >= 18.5 && $resultado <=24.9)
        {
            echo($nombre . " Usted tiene un peso saludable");
    
        }
        else if($resultado >=25.0 && $resultado <= 29.9)
        {
            echo($nombre . " Usted tiene sobrepeso");
    
        }else{
            echo($nombre . " Usted tiene obesidad");
            }
            
        }
}

?>