<?php

interface IObservable
{
    public function attach(IObserver $observer, string $key): void;

    public function detach(IObserver $observer, string $key): void;

    public function notify(): void;
}
