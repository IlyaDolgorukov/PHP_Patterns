<?php

class BaseMessage implements IMessage
{
    protected IMessage $message;

    public function __construct(IMessage $message)
    {
        $this->message = $message;
    }

    public function send(string $message): void
    {
        $this->message->send($message);
    }
}
