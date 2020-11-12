<?php

class Exchange implements IObservable
{
    private array $vacancies = [];
    private array $observers = [];
    public ?array $newVacancy = null;

    public function addVacancy(string $key, string $position, string $employer): void
    {
        $this->newVacancy = compact('key', 'position', 'employer');
        if (!isset($this->vacancies[$key])) {
            $this->vacancies[$key] = [];
        }
        $this->vacancies[$key] = compact('position', 'employer');
        $this->notify();
    }

    public function attach(IObserver $observer, string $key): void
    {
        if (!isset($this->observers[$key])) {
            $this->observers[$key] = [];
        }
        if (!isset($this->observers[$key][$observer->id])) {
            $this->observers[$key][$observer->id] = $observer;
        }
    }

    public function detach(IObserver $observer, string $key): void
    {
        if (isset($this->observers[$key][$observer->id])) {
            unset($this->observers[$key][$observer->id]);
        }
    }

    public function notify(): void
    {
        echo 'New vacancy: "' . $this->newVacancy['position'] . '"' . PHP_EOL;
        echo '---------------' . PHP_EOL . PHP_EOL;
        $key = $this->newVacancy['key'];
        if ($this->observers[$key]) {
            foreach ($this->observers[$key] as $observer) {
                $observer->update($this);
            }
        } else {
            echo 'At this moment there are no applicants';
        }
        $this->newVacancy = null;
    }
}
