<?php

interface Command
{
    public function execute(string $filename);
    public function unExecute(string $filename);
}
