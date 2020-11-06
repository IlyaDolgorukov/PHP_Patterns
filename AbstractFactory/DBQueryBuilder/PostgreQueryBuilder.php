<?php

class PostgreQueryBuilder extends DBQueryBuilder
{
    public function insert(array $params): bool
    {
        echo '1 row "' . $params['name'] . '" inserted to Postgre database' . PHP_EOL;
        return true;
    }

    public function select(array $params): bool
    {
        echo 'Row id #' . $params['id'] . ' selected from Postgre database' . PHP_EOL;
        return true;
    }

    public function update(array $params): bool
    {
        echo 'Row id #' . $params['id'] . ' updated in Postgre database' . PHP_EOL;
        return true;
    }

    public function delete(array $params): bool
    {
        echo 'Row id #' . $params['id'] . ' deleted from Postgre database' . PHP_EOL;
        return true;
    }
}
