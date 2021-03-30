<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function produtos (){
        echo "<ol>";
        echo "<li>Laranja</li>";
        echo "<li>Maça</li>";
        echo "<li>Pera</li>";
        echo "<li>Pessego</li>";
        echo "<li>Jabuticaba</li>";
        echo "</ol>";
    }

    public function getNome(){
        return "Jose da Silva";
    }
    
    public function getIdade(){
        return "30";
    }
    
    public function multiplicar($n1, $n2){
        return $n1 * $n2;
    }
}
