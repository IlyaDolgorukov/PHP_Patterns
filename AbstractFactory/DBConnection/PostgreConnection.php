<?php

class PostgreConnection extends DBConnection
{
    public function connect(array $params): bool
    {
        echo 'Connection to Postgre database "' . $params['dbname'] . '" success' . PHP_EOL;
        return true;
    }
}
