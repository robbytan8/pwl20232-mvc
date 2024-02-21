<?php

use controller\CitizenController;
use controller\FamilyCardController;
use controller\HomeController;

$mn = filter_input(INPUT_GET, 'menu');
switch ($mn) {
  case 'home':
    $homeController = new Homecontroller();
    $homeController->home();
    break;
  case 'fam-card':
    $fcController = new FamilyCardController();
    $fcController->index();
    break;
  case 'fam-card-create':
    $fcController = new FamilyCardController();
    $fcController->create();
    break;
  case 'fam-card-store':
    $fcController = new FamilyCardController();
    $fcController->store();
    break;
  case 'ctz':
    $cController = new CitizenController();
    $cController->index();
    break;
  case 'ctz-create':
    $cController = new CitizenController();
    $cController->create();
    break;
  case 'ctz-store':
    $cController = new CitizenController();
    $cController->store();
    break;
  default:
    $homeController = new Homecontroller();
    $homeController->home();
}