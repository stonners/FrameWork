<?php


namespace App\Service;


class MessageGenerator
{
    public function getRandomMessage(): string
    {
        $message = [
            'Tu la fait !',
            'Bon travail !',
            'Wow c\'est la meilleure update !'
        ];
        $index = array_rand($message);
        return $message[$index];
    }

}