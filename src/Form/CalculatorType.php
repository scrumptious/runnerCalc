<?php
/**
 * Created by PhpStorm.
 * User: nerd
 * Date: 10/04/2018
 * Time: 14:34
 */

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Calculator;

class CalculatorType extends AbstractType {

  public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
      ->add('distance', NumberType::class, array('attr' => array('class' => 'form-control')))
      ->add('hours', NumberType::class, array('attr' => array('class' => 'form-control')))
      ->add('minutes', NumberType::class, array('attr' => array('class' => 'form-control')))
      ->add('seconds', NumberType::class, array('attr' => array('class' => 'form-control')))
      ->add('send', SubmitType::class, array('attr' => array('class' => 'btn btn-primary mt-3')))
    ;

  }
  public function configureOptions(OptionsResolver $resolver) {
    $resolver->setDefaults(array(
      'data_class' => Calculator::class
    ));
  }
}