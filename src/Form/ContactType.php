<?php
/**
 * Created by PhpStorm.
 * User: nerd
 * Date: 10/04/2018
 * Time: 12:46
 */

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Contact;
class ContactType extends AbstractType {


  public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
      ->add('name', TextType::class, array('attr' => array('class' => 'calculator-control')))
      ->add('email',EmailType::class, array('attr' => array('class' => 'calculator-control')))
      ->add('subject', TextType::class, array('attr' => array('class' => 'calculator-control')))
      ->add('message', TextareaType::class, array('attr' => array('class' => 'calculator-control')))
      ->add('save', SubmitType::class, array('label' => 'Send enquiry', 'attr' => array('class' => 'btn btn-primary mt-2')))
    ;
  }
  public function configureOptions(OptionsResolver $resolver) {
    $resolver->setDefaults(array(
      'data_class' => Contact::class
    ));
  }
}
