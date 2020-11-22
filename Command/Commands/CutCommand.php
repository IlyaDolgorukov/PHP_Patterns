<?php

class CutCommand implements Command
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
        $this->text = substr($fileText, $this->start, $this->end - $this->start);
        $fileText = substr_replace($fileText, '', $this->start, strlen($this->text));
        file_put_contents($filename, $fileText);
        echo 'Cut text "' . $this->text . '" from file "' . $filename . '" to clipboard' . PHP_EOL;
    }

    public function unExecute(string $filename): void
    {
        echo 'Undo Cut command by ';
        $paste = new PasteCommand($this->start, $this->text);
        $paste->execute($filename);
    }
}
