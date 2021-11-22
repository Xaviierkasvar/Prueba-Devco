<?php
session_start();
require 'vendor/autoload.php';
require "../Modelo/ConexionBasesDatos.php";
require "../Modelo/Candidato.php";

$clase = new Candidato;
$resultado=$clase->ConsultaCandidato($_GET['cedula']);
      while($registro=$resultado->fetch_object())
{
    $nom = $registro->nombre;
    $ape = $registro->apellido;
    $cor = $registro->correo;
}
  
  use \Mailjet\Resources;

  $mj = new \Mailjet\Client('9a488e483468e294f5f4f5c3dc020463','5b1112471f222cf35c0255d394d95f88',true,['version' => 'v3.1']);
  $body = [
    'Messages' => [
      [
        'From' => [
          'Email' => "witicof691@nefacility.com",
          'Name' => "Prueba Devco"
        ],
        'To' => [
          [
            'Email' => "$cor",
            'Name' => "$nom $ape"
          ]
        ],
        'Subject' => "Notificación Avance Etapa 2",
        'TextPart' => "¡FELICIDAES!",
        'HTMLPart' => "<h3>Nos complace informarte tu avance satisfactorio en el proceso de selección a La etapa 2<br />Muy pendiente a los canales dispuestos nos estaremos comunicando para consertar el sueldo final y la fecha de inicio.",
        'CustomID' => "AppGettingStartedTest"
      ]
    ]
  ];
  $response = $mj->post(Resources::$Email, ['body' => $body]);
  $response->success() && var_dump($response->getData());
  header("location:../Vista/Admin/Consulta.php?msj=1");
?>