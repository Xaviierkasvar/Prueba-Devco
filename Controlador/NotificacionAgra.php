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
        'Subject' => "Notificación Agradecimiento",
        'TextPart' => "Cordial saludo,",
        'HTMLPart' => "En nombre del Departamento de Gestión y Talento Humano, queremos agradecerle por habernos elegido como una de sus alternativas de proyección y desarrollo profesional.<br/>Sin embargo, para dar continuidad a nuestro proceso; le informamos que se ha decidido avanzar con otros candidatos que se ajustan más al perfil que estamos requiriendo actualmente.<br/>En nombre de la compañía le agradecemos su participación en dicho proceso y le deseamos éxitos en sus metas profesionales.",
        'CustomID' => "AppGettingStartedTest"
      ]
    ]
  ];
  $response = $mj->post(Resources::$Email, ['body' => $body]);
  $response->success() && var_dump($response->getData());
  header("location:../Vista/Admin/Consulta.php?msj=3");
?>