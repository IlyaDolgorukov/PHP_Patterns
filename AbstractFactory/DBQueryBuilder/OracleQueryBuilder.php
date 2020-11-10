<?php

class OracleQueryBuilder extends DBQueryBuilder
{
    public function insert(array $params): bool
    {
        echo '1 row "' . $params['name'] . '" inserted to Oracle database' . PHP_EOL;
        return true;
    }

    public function select(array $params): bool
    {
        echo 'Row id #' . $params['id'] . ' selected from Oracle database' . PHP_EOL;
        return true;
    }

    public function update(array $params): bool
    {
        echo 'Row id #' . $params['id'] . ' updated in Oracle database' . PHP_EOL;
        return true;
    }

    public function delete(array $params): bool
    {
        echo 'Row id #' . $params['id'] . ' deleted from Oracle database' . PHP_EOL;
        return true;
    }
}
