<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RunnerRepository")
 */
class Runner
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

  /**
   * @ORM\Column(type="integer")
   */
    private $age;

    /**
   * @ORM\Column(type="integer")
   */
    private $distance;

    /**
     * @ORM\Column(type="smallint")
     */
    private $hours;

  /**
   * @ORM\Column(type="smallint")
   */
    private $minutes;

  /**
   * @ORM\Column(type="smallint")
   */
    private $seconds;


    public function getId()
    {
        return $this->id;
    }

    public function getName() {
      return $this->name;
    }
    public function setName($name): void {
      $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge() {
      return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void {
      $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getDistance() {
      return $this->distance;
    }

    /**
     * @param mixed $distance
     */
    public function setDistance($distance): void {
      $this->distance = $distance;
    }

  /**
   * @return mixed
   */
  public function getHours() {
    return $this->hours;
  }

  /**
   * @param mixed $hours
   */
  public function setHours($hours): void {
    $this->hours = $hours;
  }

  /**
   * @return mixed
   */
  public function getMinutes() {
    return $this->minutes;
  }

  /**
   * @param mixed $minutes
   */
  public function setMinutes($minutes): void {
    $this->minutes = $minutes;
  }

  /**
   * @return mixed
   */
  public function getSeconds() {
    return $this->seconds;
  }

  /**
   * @param mixed $seconds
   */
  public function setSeconds($seconds): void {
    $this->seconds = $seconds;
  }

    /**
     * @return mixed
     */

}
