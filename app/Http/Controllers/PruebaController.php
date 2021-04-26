<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function hello($name="")
    {
        if ($name) {
            echo "Hola $name";
        } else {
            echo "Hola mundo";
        }
    }

    public function potencias2()
    {
        for ($i=0; $i < 9; $i++) { 
            $potencia = pow(2, $i);
            echo "<li>$potencia</li>";
        }
    }
}
