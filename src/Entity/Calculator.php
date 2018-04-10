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
   * @Assert\NotBlank()
   * @Assert\Type("Time")
   */
  protected $time;


  public function getDistance() {
    return $this->distance;
  }
  public function setDistance($distance): void {
    $this->distance = $distance;
  }

  public function getTime() {
    return $this->time;
  }
  public function setTime($time): void {
    $this->time = $time;
  }


}