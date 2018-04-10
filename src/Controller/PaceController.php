<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaceController extends Controller  {
  /**
   * @Route("/pace/", name="app_pace")
   *
   */
  public function show() {
    return $this->render("\pace\show.html.twig");
  }
}