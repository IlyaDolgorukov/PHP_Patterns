<?php

class MacrosoftWorld
{
    private string $filename;
    private array $commands = [];
    private int $pointer = 0;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function action(Command $command): void
    {
        $command->execute($this->filename);
        $this->commands[] = $command;
        $this->pointer++;
    }

    public function undo(int $steps): void
    {
        for ($i = 0; $i < $steps; $i++) {
            if (--$this->pointer > 0) {
                $this->commands[$this->pointer]->unExecute($this->filename);
            } else {
                break;
            }
        }
    }

    public function redo(int $steps): void
    {
        for ($i = 0; $i < $steps; $i++) {
            if (++$this->pointer <= count($this->commands)) {
                $this->commands[$this->pointer]->execute($this->filename);
            } else {
                break;
            }
        }
    }
}
