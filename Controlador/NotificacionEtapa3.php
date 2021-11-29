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

  $mj = new \Mailjet\Client('bb461087bf1469650013311d20a8df93','eb613da67ce3824d05ec59526296ca9b',true,['version' => 'v3.1']);
  $body = [
    'Messages' => [
      [
        'From' => [
          'Email' => "lifagis212@terasd.com",
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