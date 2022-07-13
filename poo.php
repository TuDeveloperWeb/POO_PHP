<?php

class miClase
{
    public $atributoUno;
    public $atributoDos;
    private $correo = "example@outlook.com";
    public static $uno = "Esto es un atributo estatico";
    const MI_CONSTANTE = 3.1416;

    public function miMetodo($parametro1, $parametro2)
    {
        echo "Su nombre es " . $parametro1 . " y tiene " . $parametro2 . " años";
    }

    public function acceso_privado()
    {
        echo "<br>".$this->correo;

    }

};

/*  Mis objetos - instanciacion   */

$miObjetoUno = new miClase;

//Insercion de datos

$miObjetoUno->atributoUno = "Oscar esperale a Maria";
$miObjetoUno->atributoDos = "27";

// Llamando de datos
echo $miObjetoUno->atributoUno . "<br>";
echo $miObjetoUno->atributoDos . "<br>";

// Llamando al metodo con parametros
$miObjetoUno->miMetodo("Maria", 27);

// Llamando a variables static de la manera correcta
echo "<br><br>" . miClase::$uno;
echo "<br>" . miClase::MI_CONSTANTE;

//Accediendo al valor de una variable privada

echo  $miObjetoUno->acceso_privado();