<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function produtos() {
    	echo "<h1>Produtos</h1>";
    	echo "<ol>";
    	echo "<li>Notebook</li>";
    	echo "<li>Impressora</li>";
    	echo "<li>Mouse</li>";
    	echo "</ol>";    	
    }

    public function getNome() {
    	echo "<h1>Dumon</h1>";
    }

    public function getIdade() {
    	echo "<h1>100</h1>";
    }

    public function multiplicar($n1, $n2) {
		echo "O produto é ".$n1*$n2;
    }


}
