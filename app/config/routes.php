<?php
$app->get('/', 'App\Controller\HomeController:index');

/*
//login
$app->post('/login', 'App\Controller\ManageController:login');
$app->get('/logout', 'App\Controller\ManageController:logout');

//manage
$app->group('/manage', function () {
  $this->get('/page/log', 'App\Controller\ManageController:log');
});
