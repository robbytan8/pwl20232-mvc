<?php

namespace controller;

use dao\FamilyCardDao;
use entity\FamilyCard;

class FamilyCardController
{
  private FamilyCardDao $familyCardDao;

  public function __construct()
  {
    $this->familyCardDao = new FamilyCardDao();
  }

  public function index(): void
  {
    $familyCards = $this->familyCardDao->showAll();
    include_once 'view/fc/family-card.index.php';
  }

  public function create(): void
  {
    include_once 'view/fc/family-card.create.php';
  }

  public function store(): void
  {
    $submitted = filter_input(INPUT_POST, 'btnSave');
    if (isset($submitted)) {
      $id = trim(filter_input(INPUT_POST, 'fcId'));
      $name = trim(filter_input(INPUT_POST, 'fcHead'));
      $address = trim(filter_input(INPUT_POST, 'fcAddress'));
      if (empty($id) || empty($name) || empty($address)) {
        header('location:index.php?menu=fam-card-create&msg=Please fill id, family head name, and address');
      } else {
        $newFamilyCard = new FamilyCard();
        $newFamilyCard->setId($id);
        $newFamilyCard->setFamilyHeadName($name);
        $newFamilyCard->setAddress($address);
        if ($this->familyCardDao->addFamilyCard($newFamilyCard)) {
          header('location:index.php?menu=fam-card&msg=Data successfully added');
        } else {
          header('location:index.php?menu=fam-card-create&msg=Error add data');
        }
      }
    }
  }
}