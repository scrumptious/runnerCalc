<?php

namespace App\Controller;

use App\Entity\Contact;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ContactType;
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

        return $this->redirectToRoute('app_email_sent');
      }

      return $this->render('contact/index.html.twig', array(
        'contactForm' => $contactForm->createView(),
      ));
    }

  /**
   * @Route("/contact/sent", name="app_email_sent")
   *
   */
    public function send(Request $request, \Swift_Mailer $mailer) {
      $name = $request->get('name');
      $email = $request->get('email');
      $message = (new \Swift_Message('Thank you for getting in touch'))
        ->setFrom($email)
        ->setTo('ljasiurski@gmail.com')
        ->setBody(
          $this->renderView('contact\message.html.twig',
            array('name' => $name)
          ),
          'text/html'
        )
      ;
      $mailer->send($message);
      return $this->redirectToRoute('app_homepage');
    }

}
