<?php

require_once('./IComputer.php');
require_once('./IMailer.php');
require_once('./IPhone.php');
require_once('./Computer.php');
require_once('./Mailer.php');
require_once('./Phone.php');

$phone = new Phone();
$mailer = new Mailer();
$computer = new Computer();

funcPhone($phone);
funcMailer($mailer);
funcComputer($computer);

function funcPhone(IPhone $phone)
{
    $phone->callPhone();
    $phone->receivePhone();
}

function funcMailer(IMailer $mailer)
{
    $mailer->sendMail();
    $mailer->receiveMail();
}

function funcComputer(IComputer $computer)
{
    $computer->playGame();
    $computer->browseWeb();
}
