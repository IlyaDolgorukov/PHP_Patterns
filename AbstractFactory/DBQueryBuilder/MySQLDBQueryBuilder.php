<?php

class MySQLDBQueryBuilder extends DBQueryBuilder
{
    public function insert(array $params): bool
    {
        echo '1 row "' . $params['name'] . '" inserted to MySQL database' . PHP_EOL;
        return true;
    }

    public function select(array $params): bool
    {
        echo 'Row id #' . $params['id'] . ' selected from MySQL database' . PHP_EOL;
        return true;
    }

    public function update(array $params): bool
    {
        echo 'Row id #' . $params['id'] . ' updated in MySQL database' . PHP_EOL;
        return true;
    }

    public function delete(array $params): bool
    {
        echo 'Row id #' . $params['id'] . ' deleted from MySQL database' . PHP_EOL;
        return true;
    }
}
