<?php
// DIC configuration 'OK'

$container = $app->getContainer();

// -----------------------------------------------------------------------------
// Service factories
// -----------------------------------------------------------------------------

// monolog
$container['logger'] = function ($container) {
  $settings = $container->get('settings');
  $logger   = new \Monolog\Logger($settings['logger']['name']);
  $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
  $logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['logger']['path'], \Monolog\Logger::DEBUG));
  return $logger;
};

$container['cookies'] = function($c){
  $request = $c->get('request');
  $request = $request->getCookieParams();
  return $request;
};


// -----------------------------------------------------------------------------
// Service providers
// -----------------------------------------------------------------------------

// Twig
$container['view'] = function ($container) {
  $settings = $container->get('settings');
  $view     = new \Slim\Views\Twig($settings['view']['template_path'], $settings['view']['twig']);
  // Add extensions
  $view->addExtension(new Slim\Views\TwigExtension($container->get('router'), $container->get('request')->getUri()));
  $view->addExtension(new Twig_Extension_Debug());
//  require 'twigz.php';
  return $view;
};

$container['kopet'] = function($container){
  return 'kopet oke';
};

// -----------------------------------------------------------------------------
// Model factories
// -----------------------------------------------------------------------------

/** User Model */
$container['homeModel'] = function ($container) {
  $kopet      = $container->get('kopet');
  $homeModel  = new App\Model\HomeModel($kopet);
  return $homeModel;
};



// -----------------------------------------------------------------------------
// Controllers factories
// -----------------------------------------------------------------------------

/** Home Controllers */
$container['App\Controller\HomeController'] = function ($container) {
  $view       = $container->get('view');
  $logger     = $container->get('logger');
  $homeModel  = $container->get('homeModel');
  return new App\Controller\HomeController($view,$logger,$homeModel);
};























// -----------------------------------------------------------------------------
// exit
// -----------------------------------------------------------------------------
