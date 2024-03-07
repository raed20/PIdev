<?php
// src/Command/SendTestEmailCommand.php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class SendTestEmailCommand extends Command
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        parent::__construct();

        $this->mailer = $mailer;
    }

    protected function configure()
    {
        $this->setName('app:send-test-email')
             ->setDescription('Sends a test email using Symfony Mailer.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $email = (new Email())
            ->from('mailtrap@demomailtrap.com')
            ->to('dumycount145@gmail.com')
            ->subject('Test Email')
            ->text('This is a test email sent using Symfony Mailer.');

        $this->mailer->send($email);

        $output->writeln('Test email sent successfully.');

        return Command::SUCCESS;
    }
}
