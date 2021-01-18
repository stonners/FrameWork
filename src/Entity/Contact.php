<?php

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
use App\Repository\ContactRepository;
use Symfony\Component\Mime\Email;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ContactRepository::class)
 * @ORM\Table(name="app_contact")
 */
class Contact
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @Assert\NotBlank(message="Ce champ ne peut pas être vide.")
     * @ORM\Column(type="string", length=50)
     */
    private $firstName;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="Ce champ ne peut pas être vide.")
     * @ORM\Column(type="string", length=50)
     */
    private $lastName;

    /**
     * @var string
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="Ce champ ne peut pas être vide.")
     * @Assert\Email(message="L'email {{value}} n'est pas valide.")
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="Ce champ ne peut pas être vide.")
     * @Assert\Length(min="25",minMessage="Votre message doit contenir au minimum {{limit}} caractères.")
     */
    private $message;


    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * Contact constructor.
     * @param $createdAt
     */
    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }


    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message): void
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }



}