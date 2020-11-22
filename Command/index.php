<?php

spl_autoload_register(static function ($class) {
    if (file_exists($class . '.php')) {
        include $class . '.php';
    } else {
        include 'Commands' . DIRECTORY_SEPARATOR . $class . '.php';
    }
});

$filename = 'text.txt';
$editor = new MacrosoftWorld($filename);

$command1 = new CopyCommand(10, 30);
$editor->action($command1);

$command2 = new PasteCommand(40, $command1->getText());
$editor->action($command2);

$command3 = new CutCommand(20, 25);
$editor->action($command3);

$command4 = new PasteCommand(80, $command3->getText());
$editor->action($command4);

$editor->undo(3);
$editor->redo(2);
