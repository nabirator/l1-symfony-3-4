<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloWorldController extends Controller
{
  /**
   * @Route("/hello_world", name="Hello World")
   */
  public function numberAction()
  {
    return new Response(
      '<html><body>Hello Symfony 3.4!</body></html>'
    );
  }
}
