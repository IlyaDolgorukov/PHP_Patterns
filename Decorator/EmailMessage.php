<?php

class EmailMessage extends BaseMessage
{
    public function send(string $message): void
    {
        echo 'Sending message "' . $message . '" by Email' . PHP_EOL;
        $this->message->send($message);
    }
}
