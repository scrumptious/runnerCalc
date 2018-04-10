<?php

namespace App\Controller;


use App\Entity\Calculator;
use App\Form\CalculatorType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CalculatorController extends Controller {

  /**
   * @Route("/calculator/", name="app_calculator")
   */
  public function show(Request $request) {
    $calculator = new Calculator();
    $calculatorForm = $this->createForm(CalculatorType::class, $calculator);

    if($calculatorForm->isSubmitted() && $calculatorForm->isValid()) {
      $calculator = $calculatorForm->getData();


      return $this->redirectToRoute('app_calculator');
    }


    return $this->render('calculator/show.html.twig', array(
      'calculatorForm' => $calculatorForm->createView()
    ));
  }
}