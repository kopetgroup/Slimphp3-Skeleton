<?php
namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class HomeController { //extends BaseController

  protected $view;
  protected $logger;
  protected $homeModel;

  public function __construct($view,$logger,$homeModel){
    $this->view         = $view;
    $this->logger       = $logger;
    $this->homeModel    = $homeModel;
  }

  public function index(Request $request, Response $response, $args) {

    //logger
    $this->logger->info("Home page action dispatched");

    $data['kopet'] = $this->homeModel->me();
    $this->view->render($response, 'index.twig',$data);

  }

}
