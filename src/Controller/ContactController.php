<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, MailerInterface $mailer): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {

            $contactFormData = $form->getData();

            $message = (new Email())
                ->from($contactFormData['email'])
                ->to('amelie.sausseau@gmail.com')
                ->subject('Nouveau message depuis le portfolio')
                ->text(
                    'Envoyé par : '.$contactFormData['name'] . '(' .$contactFormData['email'].')'.\PHP_EOL.
                    'Message :' . $contactFormData['message'],
                    'text/plain'
                );

            $mailer->send($message);

            return new JsonResponse([
                'success' => true,
            ]);

            return $this->redirectToRoute('contact');
        }
            return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'form' => $form->createView(),
        ]);
        
    }
}