<?php

class PostgreRecord extends DBRecord
{
    public function dump(array $params): bool
    {
        echo 'Dump of Postgre database "' . $params['dbname'] . '" created' . PHP_EOL;
        return true;
    }
}
