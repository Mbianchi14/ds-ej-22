<?php

require_once 'modelo/mascota.php';
require_once 'modelo/duenioMascota.php';

$d = new DuenioMascota();
$d->Id = 15;
$d->Nombre = 'Mauricio';
$d->Apellido = 'Bianchi';
$d->Documento = 34042215;
$d->Celular = 3415321234;
$d->Direccion = 'San Martin 100';



$m = new Mascota();
$m->Id = 1;
$m->Nombre = 'Buddy';
$m->Raza = 'Labrador';
$m->Duenio = $d;
$m->MostrarDatos();
