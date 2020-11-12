<?php

interface IObserver
{
    public function update(IObservable $subject): void;
}
