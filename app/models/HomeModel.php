<?php
namespace App\Model;

final class HomeModel extends BaseModel {

  protected $kopet;

  public function __construct($kopet){
    $this->kopet      = $kopet;
  }

  public function home(){
    echo $this->me();
  }

}
