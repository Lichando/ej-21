

<?php
class DatosPersona{
    public $nombre;
    public $apellido;
    public $email;
    public $edad;

    public function MostrarPropiedades() {
        echo "Hola, mi nombre es " . $this->nombre ."<br>"
        ." apellido " . $this->apellido . "<br>"
        ." ,mi mail es:  " . $this->email   ."<br>"
        ." y tengo " . $this->edad . " años.";
    }
}



?>

