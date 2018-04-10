<?php

namespace App\Controller;

use App\Entity\Contact;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ContactType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="app_contact")
     */
    public function index(Request $request) {
      $contact = new Contact();

      $contactForm = $this->createForm(ContactType::class, $contact);

      $contactForm->handleRequest($request);

      if($contactForm->isSubmitted() && $contactForm->isValid()) {
        $contact = $contactForm->getData();

        // ... perform some action, such as saving the task to the database
        // for example, if Task is a Doctrine entity, save it!
        // $entityManager = $this->getDoctrine()->getManager();
        // $entityManager->persist($task);
        // $entityManager->flush();

        return $this->redirectToRoute('app_contact');
      }

      return $this->render('contact/index.html.twig', array(
        'contactForm' => $contactForm->createView(),
      ));
    }



//    public function index() {
//        return $this->render('contact/index.html.twig', [
//            'controller_name' => 'ContactController',
//        ]);
//    }
}
