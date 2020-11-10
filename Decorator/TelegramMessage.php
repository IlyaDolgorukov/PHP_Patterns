<?php

class TelegramMessage extends BaseMessage
{
    public function send(string $message): void
    {
        echo 'Sending message "' . $message . '" by Telegram' . PHP_EOL;
        $this->message->send($message);
    }
}
