<?php

namespace dao;

use entity\Citizen;
use PDO;

class CitizenDao
{
  public function showAll()
  {
    $conn = PDOUtil::createDBConnection();
    $query = "SELECT citizen.id, name, citizen.address, birth_date, marital_status, job, blood_type, religion, family_card_id, family_head_name FROM citizen JOIN family_card fc ON citizen.family_card_id = fc.id";
    $stmt = $conn->prepare($query);
    $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Citizen::class);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $conn = null;
    return $result;
  }

  public function addCitizen(Citizen $citizen)
  {
    $result = 0;
    $conn = PDOUtil::createDBConnection();
    $query = "INSERT INTO citizen(id, name, address, birth_date, marital_status, job, blood_type, religion, family_card_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(1, $citizen->getId());
    $stmt->bindValue(2, $citizen->getName());
    $stmt->bindValue(3, $citizen->getAddress());
    $stmt->bindValue(4, $citizen->getBirthDate());
    $stmt->bindValue(5, $citizen->getMaritalStatus());
    $stmt->bindValue(6, $citizen->getJob());
    $stmt->bindValue(7, $citizen->getBloodType());
    $stmt->bindValue(8, $citizen->getReligion());
    $stmt->bindValue(9, $citizen->getFamilyCard()->getId());
    $conn->beginTransaction();
    if ($stmt->execute()) {
      $conn->commit();
      $result = 1;
    } else {
      $conn->rollBack();
    }
    $conn = null;
    return $result;
  }
}