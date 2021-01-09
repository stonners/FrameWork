<?php
namespace App\Service;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Twig\Environment;

final class ContactMailer{

private const TEMPLATE = 'email/contact.html.twig';

private MailerInterface $mailer;
private Environment $twig;

    /**
     * ContactMailer constructor.
     * @param MailerInterface $mailer
     * @param Environment $twig
     */
    public function __construct(MailerInterface $mailer, Environment $twig)
    {
        $this->mailer = $mailer;
        $this->twig = $twig;
    }
    $this->mailer->send($email)


}

