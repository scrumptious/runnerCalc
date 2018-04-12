<?php

namespace App\Controller;

//use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Runner;

class RunnerController extends Controller {
    /**
     * @Route("/runner/", name="app_runner")
     */
    public function index() {
      $runner = new Runner();
      $entityManager = $this->getDoctrine()->getManager();
      $repository = $entityManager->getRepository(Runner::class);
      $runner = $repository->findAll();

//        $runner = new Runner();
//
//        $runner->setName("Madison");
//        $runner->setAge(28);
//        $runner->setDistance(3000);
//
//        $runner->setHours('0');
//        $runner->setMinutes('15');
//        $runner->setSeconds('44');
//
//        $entityManager->persist($runner);
//
//        $entityManager->flush();

        if($runner) {
          return $this->render('runner/index.html.twig', array(
            'runners' => $runner
          ));
        }
        return new Response('<h1>No runners in a database</h1>');
    }

  /**
   * @Route("/runner/{id}/",
   * name="app_runner_show")
   */
    public function show($id) {
      $entityManager = $this->getDoctrine()->getManager();
      $runner = $entityManager->getRepository(Runner::class)
        ->find($id);
      if($runner === NULL) {
        return $this->render('runner\no-results.html.twig');
      }
      else {
        return $this->render('runner\chosen-runner.html.twig', array(
          'runner' => $runner
        ));
      }
    }
}
