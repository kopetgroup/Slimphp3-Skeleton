<?php
namespace App\Controller;

class BaseController {

  protected $config;

  public function __construct($config){

    //load config file
    //$this->config = $config['config']['config'];
    //load couchdb
    //$this->couch = new \App\Plugins\RizoaCouch\Couch($this->config->dbserver,$this->config->database);

  }

}
