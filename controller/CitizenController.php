<?php

namespace controller;

use dao\CitizenDao;
use dao\FamilyCardDao;
use entity\Citizen;

class CitizenController
{
  private CitizenDao $citizenDao;
  private FamilyCardDao $familyCardDao;

  public function __construct()
  {
    $this->citizenDao = new CitizenDao();
    $this->familyCardDao = new FamilyCardDao();
  }

  public function index(): void
  {
    $citizens = $this->citizenDao->showAll();
    include_once 'view/citizen/citizen.index.php';
  }

  public function create(): void
  {
    $famCards = $this->familyCardDao->showAll();
    include_once 'view/citizen/citizen.create.php';
  }

  public function store()
  {
    $submitted = filter_input(INPUT_POST, 'btnSave');
    if (isset($submitted)) {
      $id = trim(filter_input(INPUT_POST, 'ctzId'));
      $name = trim(filter_input(INPUT_POST, 'ctzName'));
      $address = trim(filter_input(INPUT_POST, 'ctzAddress'));
      $birthDate = trim(filter_input(INPUT_POST, 'ctzBirth'));
      $marital = trim(filter_input(INPUT_POST, 'ctzMarital'));
      $job = trim(filter_input(INPUT_POST, 'ctzJob'));
      $bloodType = trim(filter_input(INPUT_POST, 'ctzBlood'));
      $religion = trim(filter_input(INPUT_POST, 'ctzReligion'));
      $famCardId = trim(filter_input(INPUT_POST, 'ctzFamCard'));
      if (empty($id) || empty($name) || empty($address) || empty($birthDate) || empty($marital) || empty($job) || empty($bloodType) || empty($famCardId)) {
        header('location:index.php?menu=ctz-create&msg=Please fill all field');
      } else {
        $citizen = new Citizen();
        $citizen->setId($id);
        $citizen->setName($name);
        $citizen->setAddress($address);
        $citizen->setBirthDate($birthDate);
        $citizen->setMaritalStatus($marital);
        $citizen->setJob($job);
        $citizen->setBloodType($bloodType);
        $citizen->setReligion($religion);
        $citizen->getFamilyCard()->setId($famCardId);
        if ($this->citizenDao->addCitizen($citizen)) {
          header('location:index.php?menu=ctz&msg=Data successfully added');
        } else {
          header('location:index.php?menu=ctz-create&msg=Error add data');
        }
      }
    }
  }
}