<?php

// Refactored
interface Mailer
{
    public function send();
}

class SmtpMailer implements Mailer
{
    public function send()
    {

    }
}

class SendGridMailer implements Mailer
{
    public function send()
    {

    }
}

/**
 * Here, mailer is interface and we can pass class that is implementing that interface
 * It's depends on abstraction
 */
class SendWelcomeMessage
{
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
}