<?php

$view->getEnvironment()->addFilter(new Twig_SimpleFilter('resize', 'resizex'));
function resizex($res,$ais){
  $w = str_replace(basename($res),$ais.'-'.basename($res),$res);
  return $w;
}

$view->getEnvironment()->addFilter(new Twig_SimpleFilter('random_date', function() {
    return mt_rand(time(), time() + 31556926);
}));

/*
  Crot
*/
$view->getEnvironment()->addFilter(new Twig_SimpleFilter(

  'ucwords',
  function ($data) {
    return ucwords(str_replace('-',' ',$data));
  }

));

/*
  formatjios
*/
$view->getEnvironment()->addFilter(new Twig_SimpleFilter(

  'formatjoss',
  function ($data) {
    return ucwords($data);
  }

));

/*
  Random
*/
$view->getEnvironment()->addFilter(new Twig_SimpleFilter(

  'random',
  function ($data) {
    shuffle($data);
    return $data;
  }

));

/*
  Ucfirst
*/
$view->getEnvironment()->addFilter(new Twig_SimpleFilter(

  'ucfirst',
  function ($data) {
    return ucfirst($data);
  }

));
