<?php

class MySQLConnection extends DBConnection
{
    public function connect(array $params): bool
    {
        echo 'Connection to MySQL database "' . $params['dbname'] . '" success' . PHP_EOL;
        return true;
    }
}
