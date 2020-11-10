<?php

class SMSMessage extends BaseMessage
{
    public function send(string $message): void
    {
        echo 'Sending message "' . $message . '" by SMS' . PHP_EOL;
        $this->message->send($message);
    }
}
