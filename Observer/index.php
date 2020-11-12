<?php

require 'IObservable.php';
require 'IObserver.php';
require 'Exchange.php';
require 'Applicant.php';

$user1 = new Applicant(1, 'John', 'john@mail.ru', 3);
$user2 = new Applicant(2, 'Mike', 'mike@mail.ru', 5);
$user3 = new Applicant(3, 'Julia', 'julia@mail.ru', 1);
$user4 = new Applicant(4, 'Anna', 'anna@mail.ru', 4);

$handHunter = new Exchange();
$handHunter->attach($user1, 'PHP');
$handHunter->attach($user2, 'PHP');
$handHunter->attach($user2, 'JavaScript');
$handHunter->attach($user3, 'C++');
$handHunter->attach($user3, 'PHP');
$handHunter->attach($user4, 'JavaScript');

$handHunter->addVacancy('PHP', 'Senior PHP programmer', 'Google');
$handHunter->addVacancy('JavaScript', 'Middle JavaScript programmer', 'Yandex');
$handHunter->addVacancy('C++', 'Junior C++ programmer', 'Mail.ru Group');

$handHunter->detach($user2, 'JavaScript');
$handHunter->detach($user3, 'C++');

$handHunter->addVacancy('JavaScript', 'Senior JavaScript programmer', 'Amazon');
$handHunter->addVacancy('C++', 'Middle C++ programmer', 'Ubisoft');
