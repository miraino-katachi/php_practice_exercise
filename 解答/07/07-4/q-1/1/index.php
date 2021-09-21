<?php

require_once('./Computer.php');
require_once('./Mailer.php');
require_once('./Phone.php');

$phone = new Phone();
$mailer = new Mailer();
$computer = new Computer();

funcPhone($phone);
funcMailer($mailer);
funcComputer($computer);

function funcPhone(Phone $phone)
{
    $phone->callPhone();
    $phone->receivePhone();
}

function funcMailer(Mailer $mailer)
{
    $mailer->sendMail();
    $mailer->receiveMail();
}

function funcComputer(Computer $computer)
{
    $computer->playGame();
    $computer->browseWeb();
}
