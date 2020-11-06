<?php

class OracleRecord extends DBRecord
{
    public function dump(array $params): bool
    {
        echo 'Dump of Oracle database "' . $params['dbname'] . '" created' . PHP_EOL;
        return true;
    }
}
