<?php

require_once('./IComputer.php');
require_once('./IMailer.php');
require_once('./IPhone.php');
require_once('./CellPhone.php');

$phone = new CellPhone();

funcPhone($phone);
funcMailer($phone);
funcComputer($phone);

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
