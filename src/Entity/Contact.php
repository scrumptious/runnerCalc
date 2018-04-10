<?php
/**
 * Created by PhpStorm.
 * User: nerd
 * Date: 10/04/2018
 * Time: 12:38
 */

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Contact {

  /**
   * @Assert\NotBlank()
   */
  protected $name;

  /**
   * @Assert\NotBlank()
   */
  protected $email;

  /**
   * @Assert\NotBlank()
   */
  protected $subject;

  /**
   * @Assert\NotBlank()
   */
  protected $message;

  protected $sentDate;


  public function getName() {
    return $this->name;
  }
  public function setName($name): void {
    $this->name = $name;
  }

  public function getEmail() {
    return $this->email;
  }
  public function setEmail($email): void {
    $this->email = $email;
  }

  public function getSubject() {
    return $this->subject;
  }
  public function setSubject($subject): void {
    $this->subject = $subject;
  }

  public function getMessage() {
    return $this->message;
  }
  public function setMessage($message): void {
    $this->message = $message;
  }

  public function getSentDate() {
    return $this->sentDate;
  }
  public function setSentDate(\DateTime $sentDate): void {
    $this->sentDate = $sentDate;
  }



}