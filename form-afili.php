<?php
/*

nombre=nombre
cedula=cedula
telefono=telefono
tipo_vehi=tipo_vehi
placas=placas
capacidad=captn
correo=email

$mensaje = $_POST['mensaje'];
$mensaje.= "\n------------\n";
$mensaje.= "\nDe: ". $_POST['nombre'];
$mensaje.= "\nE-mail: ".$_POST['email'];*/

$mensaje = "De: ". $_POST['nombre'];
$mensaje.= "\nCedula: ". $_POST['cedula'];
$mensaje.= "\ntelefono: ". $_POST['telefono'];
$mensaje.= "\ntipo de Vehiculo: ". $_POST['tipo_vehi'];
$mensaje.= "\nplacas: ". $_POST['placas'];
$mensaje.= "\ncapacidad: ". $_POST['captn'];
$mensaje.= "\ncorreo: ". $_POST['email'];

//Nuestro Correo

$destino = "afiliados@orizorca.com.ve";
$remitente = $_POST['email'];
$asunto = "Afiliacion en Orizorca";
mail($destino, $asunto, $mensaje, "FROM: Orizorca <afiliados@orizorca.com.ve>");

//Mensaje de Confirmacion

echo "Mensaje enviado. Gracias por contactarse.";
?>

