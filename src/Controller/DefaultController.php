<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {
    /*
     * routes to "/"" with routes.yaml, name = app_homepage
     */
    public function index() {
      $title = "Runner calculator";
      $facts = [
        "The foot has 26 bones, 33 joints, 112 ligaments.",
        "Your neighborhood cat can run faster than a human!",
        "Lactic acid makes breast milk taste sour",
        "3100 miles that’s the distance of the longest certified road race – Sri Chimnoy",
        "Under 600 people have completed a marathon on all 7 continents",
        "Average finish time across all 2015 Boston Marathon finishers was 3:46",
        "Average winning time of a Boston Marathon is 2:09 for men and 2:25 for women",
              "1984 was the first women’s marathon in the Olympics",
        "Christopher McDougall’s 2009 book, Born to Run, kicked off a barefoot running mania",
        "Ultrarunning is a smaller set of racers, but growing at a faster rate than marathons or half marathons",
        "Tough Guy is considered the oldest obstacle course race and started in 1987, now joined by Mud Run and Spartan to create a whole new running world",
        "Paula Radcliff still holds the women’s marathon record of 2:15:23 from the 2003 London Marathon",
        "It takes 200 muscles to take a step when you run."
      ];
      $random_number = mt_rand(0, count($facts)-1);
      $random_fact = $facts[$random_number];
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'random_fact' => $random_fact
        ]);
    }
}
