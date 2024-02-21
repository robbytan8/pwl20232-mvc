<?php

namespace entity;

/**
 * @author Robby Tan
 */
class Citizen
{
  private string $id;
  private string $name;
  private string $address;
  private string $birthDate;
  private string $maritalStatus;
  private string $job;
  private string $bloodType;
  private string $religion;
  private FamilyCard $familyCard;

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
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * @param string $name
   */
  public function setName(string $name): void
  {
    $this->name = $name;
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

  /**
   * @return string
   */
  public function getBirthDate(): string
  {
    return $this->birthDate;
  }

  /**
   * @param string $birthDate
   */
  public function setBirthDate(string $birthDate): void
  {
    $this->birthDate = $birthDate;
  }

  /**
   * @return string
   */
  public function getMaritalStatus(): string
  {
    return $this->maritalStatus;
  }

  /**
   * @param string $maritalStatus
   */
  public function setMaritalStatus(string $maritalStatus): void
  {
    $this->maritalStatus = $maritalStatus;
  }

  /**
   * @return string
   */
  public function getJob(): string
  {
    return $this->job;
  }

  /**
   * @param string $job
   */
  public function setJob(string $job): void
  {
    $this->job = $job;
  }

  /**
   * @return string
   */
  public function getBloodType(): string
  {
    return $this->bloodType;
  }

  /**
   * @param string $bloodType
   */
  public function setBloodType(string $bloodType): void
  {
    $this->bloodType = $bloodType;
  }

  /**
   * @return string
   */
  public function getReligion(): string
  {
    return $this->religion;
  }

  /**
   * @param string $religion
   */
  public function setReligion(string $religion): void
  {
    $this->religion = $religion;
  }

  /**
   * @return FamilyCard
   */
  public function getFamilyCard(): FamilyCard
  {
    if (!isset($this->familyCard)) {
      $this->familyCard = new FamilyCard();
    }
    return $this->familyCard;
  }

  /**
   * @param FamilyCard $familyCard
   */
  public function setFamilyCard(FamilyCard $familyCard): void
  {
    $this->familyCard = $familyCard;
  }

  public function __set(string $name, $value): void
  {
    switch ($name) {
      case 'birth_date':
        $this->birthDate = $value;
        break;
      case 'marital_status':
        $this->maritalStatus = $value;
        break;
      case 'blood_type':
        $this->bloodType = $value;
        break;
      case 'family_card_id':
        $this->getFamilyCard()->setId($value);
        break;
      case 'family_head_name':
        $this->getFamilyCard()->setFamilyHeadName($value);
        break;
    }
  }
}