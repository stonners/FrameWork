<?php


namespace App\Mailer;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class ContactMailer
{
    private Environment $twig;
    private MailerInterface $mailer;
    private string $contactEmailAdress;

    /**
     * ContactMailer constructor.
     * @param MailerInterface $mailer
     * @param Environment $twig
     * @param string $contactEmailAdress
     */
    public function __construct(MailerInterface $mailer, Environment $twig, string $contactEmailAdress)
    {
        $this->mailer = $mailer;
        $this->twig = $twig;
        $this->contactEmailAdress = $contactEmailAdress;
    }

    public function send()
    {
        try {
            $email = (new Email())
                ->from('stonnersdu39@gmail.com')
                ->to('stonnersdu39@gmail.com')
                ->subject('un test')
                ->html($this->twig->render('contactEmail.html.twig', ['contact' => $this->contactEmailAdress]));
        } catch (LoaderError $e) {
        } catch (RuntimeError $e) {
        } catch (SyntaxError $e) {
        }
        // $this->mailer->send($email);
    }
}