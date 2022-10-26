<?php
// Dependency Inversion Principle Violation
/**
 * One should depends on abstraction instead of concretion
 * Here, SendWelcomeMessage depends on Mailer and mailer can send
 */
class Mailer
{
    function send()
    {
        
    }
}

class SendWelcomeMessage
{
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
}