<?php

namespace entity;

/**
 * @author Robby Tan
 */
class FamilyCard
{
  private string $id;
  private string $familyHeadName;
  private string $address;

  /**
   * @return string
   */
  public function getId(): string
  {
    return $this->id;
  }

  /**
   * @param string $id
   */
  public function setId(string $id): void
  {
    $this->id = $id;
  }

  /**
   * @return string
   */
  public function getFamilyHeadName(): string
  {
    return $this->familyHeadName;
  }

  /**
   * @param string $familyHeadName
   */
  public function setFamilyHeadName(string $familyHeadName): void
  {
    $this->familyHeadName = $familyHeadName;
  }

  /**
   * @return string
   */
  public function getAddress(): string
  {
    return $this->address;
  }

  /**
   * @param string $address
   */
  public function setAddress(string $address): void
  {
    $this->address = $address;
  }

  public function __set(string $name, $value): void
  {
    if ($name == 'family_head_name') {
      $this->familyHeadName = $value;
    }
  }
}