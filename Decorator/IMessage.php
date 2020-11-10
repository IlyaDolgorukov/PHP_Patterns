<?php

interface IMessage
{
    public function send(string $message): void;
}
