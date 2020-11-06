<?php

class OracleConnection extends DBConnection
{
    public function connect(array $params): bool
    {
        echo 'Connection to Oracle database "' . $params['dbname'] . '" success' . PHP_EOL;
        return true;
    }
}
