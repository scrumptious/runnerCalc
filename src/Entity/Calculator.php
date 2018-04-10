<?php
/**
 * Created by PhpStorm.
 * User: nerd
 * Date: 10/04/2018
 * Time: 14:36
 */

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Calculator {
  /**
   * @Assert\NotBlank()
   * @Assert\Type("Number")
   */
  protected $distance;

  /**
   * @Assert\Type("Number")
   */
  protected $hours;

  /**
   * @Assert\Type("Number")
   */
  protected $minutes;

  /**
   * @Assert\Type("Number")
   */
  protected $seconds;


  public function getDistance() {
    return $this->distance;
  }
  public function setDistance($distance): void {
    $this->distance = $distance;
  }

  public function getHours() {
    return $this->hours;
  }
  public function setHours($hours): void {
    $this->hours = $hours;
  }

  public function getMinutes() {
    return $this->minutes;
  }
  public function setMinutes($minutes): void {
    $this->minutes = $minutes;
  }

  public function getSeconds() {
    return $this->seconds;
  }
  public function setSeconds($seconds): void {
    $this->seconds = $seconds;
  }



}