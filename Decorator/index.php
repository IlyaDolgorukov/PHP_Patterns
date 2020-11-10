<?php

require 'IMessage.php';
require 'DefaultMessage.php';
require 'BaseMessage.php';
require 'EmailMessage.php';
require 'SMSMessage.php';
require 'TelegramMessage.php';

$message = 'Hello world!';
$base = new EmailMessage(new SMSMessage(new TelegramMessage(new DefaultMessage())));
$base->send($message);
