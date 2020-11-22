<?php

class PasteCommand implements Command
{
    private int $start;
    private string $text;

    public function __construct(int $start, string $text)
    {
        $this->start = $start;
        $this->text = $text;
    }

    public function execute(string $filename): void
    {
        $fileText = file_get_contents($filename);
        $fileText = substr_replace($fileText, $this->text, $this->start, 0);
        file_put_contents($filename, $fileText);
        echo 'Paste text "' . $this->text . '" to file "' . $filename . '"' . PHP_EOL;
    }

    public function unExecute(string $filename): void
    {
        echo 'Undo Paste command by ';
        $cut = new CutCommand($this->start, $this->start + strlen($this->text));
        $cut->execute($filename);
    }
}
