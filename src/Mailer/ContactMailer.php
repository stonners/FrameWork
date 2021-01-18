<?php


namespace App\Mailer;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Twig\Environment;

class ContactMailer
{
    private Environment $twig;
    private MailerInterface $mailer;

    /**
     * ContactMailer constructor.
     */
    public function __construct(MailerInterface $mailer, Environment $twig, string $contactEmailAdress)
    {
        $this->mailer = $mailer;
        $this->twig = $twig;
        $this->contactEmailAdress = $contactEmailAdress;
    }

    public function send()
    {
        $email = (new Email())
            ->from('stonnersdu39@gmail.com')
            ->to('stonnersdu39@gmail.com')
            ->subject('un test')
            ->html($this->twig->render('contactEmail.html.twig', ['contact' => $this->contactEmailAdress]));
    }
}