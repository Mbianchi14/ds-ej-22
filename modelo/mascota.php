<?php

class Mascota
{
    public $Id;
    public $Nombre;
    public $Raza;
    public $Duenio;
    
    

    public function MostrarDatos () 
    {
        echo 'Id: ' . $this->Id . '<br>';
        echo 'Nombre: ' . $this->Nombre . '<br>';
        echo 'Raza: ' . $this->Raza . '<br>';
        echo '--------------------------------' .'<br>';
        echo 'Datos del dueño:' .'<br>';
        echo 'Id: ' . $this->Duenio->Id . '<br>';
        echo 'Nombre: ' . $this->Duenio->Nombre . '<br>';
        echo 'Apellido: ' . $this->Duenio->Apellido . '<br>';
        echo 'Documento: ' . $this->Duenio->Documento . '<br>';
        echo 'Celular: ' . $this->Duenio->Celular . '<br>';
        echo 'Direccion: ' . $this->Duenio->Direccion . '<br>';
    }
}
