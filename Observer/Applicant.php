<?php

class Applicant implements IObserver
{
    public int $id;
    public string $name;
    public string $email;
    public string $workExperience;

    public function __construct(int $id, string $name, string $email, string $workExperience)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->workExperience = $workExperience;
    }

    public function update(IObservable $subject): void
    {
        echo 'Notify for: ' . $this->name . ' (' . $this->email .')' . PHP_EOL;
        echo 'HandHunter.gb found a new vacancy for you!' . PHP_EOL;
        echo 'Position: ' . $subject->newVacancy['position'] . PHP_EOL;
        echo 'Employer: ' . $subject->newVacancy['employer'] . PHP_EOL . PHP_EOL;
    }
}
