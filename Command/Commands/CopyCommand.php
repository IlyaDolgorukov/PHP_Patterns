<?php

class CopyCommand implements Command
{
    private int $start;
    private int $end;
    private string $text = '';

    public function __construct(int $start, int $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function execute(string $filename): void
    {
        $fileText = file_get_contents($filename);
        $this->text = substr($fileText, $this->start, $this->end);
        echo 'Copy text "' . $this->text . '" to clipboard' . PHP_EOL;
    }

    public function unExecute(string $filename): void
    {
        $this->text = '';
        echo 'Clear clipboard' . PHP_EOL;
    }
}
