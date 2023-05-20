<?php
/*Declarar una clase DatosPersona con las siguientes propiedades.
-Nombre
-Apellido
-Email
-Edad
Agregar un método que imprima todas sus propiedades y tenga de nombre MostrarPropieades.
En un archivo index:
-instanciar la clase DatosPersona, 
-darle valor a las propiedades (el valor que ustedes quieran), 
-llamar al método MostrarPropieades.*/

require_once 'modelo/persona.php'; 

$persona = new  DatosPersona();
$persona->nombre = "Arturo";
$persona->apellido = "Vidal";
$persona->email = "ArturitoVidal@Macmail.com";
$persona->edad = 32;

$persona->MostrarPropiedades();
?>
