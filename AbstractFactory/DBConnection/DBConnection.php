<?php

abstract class DBConnection
{
    abstract public function connect(array $params): bool;
}
