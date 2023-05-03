<?php

namespace Controllers;

use Classes\Email;
use MVC\Router;



class PaginasController
{
  public static function index(Router $router)
  {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if (isset($_POST["nombre"])) {
        $response = array('mensaje' => true);     
        //Enviar email
        $email=new Email($_POST);
        $email->enviarEmail();
        echo json_encode($response);
      } else {
        $response = array('mensaje' => false);
        echo json_encode($response);
      }
      return;
    }
    $router->render("paginas/index", ["titulo" => "¡Desarrollamos tu sitio web y tienda en línea a medida! "]);
  }
}
