<?php

namespace dao;

use entity\FamilyCard;
use PDO;

/**
 * @author Robby Tan
 */
class FamilyCardDao
{
  public function showAll()
  {
    $conn = PDOUtil::createDBConnection();
    $query = "SELECT id, family_head_name, address FROM family_card";
    $stmt = $conn->prepare($query);
    $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, FamilyCard::class);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $conn = null;
    return $result;
  }

  public function addFamilyCard(FamilyCard $familyCard)
  {
    $result = 0;
    $conn = PDOUtil::createDBConnection();
    $query = "INSERT INTO family_card(id, family_head_name, address) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(1, $familyCard->getId());
    $stmt->bindValue(2, $familyCard->getFamilyHeadName());
    $stmt->bindValue(3, $familyCard->getAddress());
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