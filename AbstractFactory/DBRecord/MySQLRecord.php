<?php

class MySQLRecord extends DBRecord
{
    public function dump(array $params): bool
    {
        echo 'Dump of MySQL database "' . $params['dbname'] . '" created' . PHP_EOL;
        return true;
    }
}
