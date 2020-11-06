<?php

abstract class DBFactory
{
    private DBConnection $connection;
    private DBRecord $record;
    private DBQueryBuilder $query;

    public function __construct()
    {
        $this->connection = $this->createConnection();
        $this->record = $this->createRecord();
        $this->query = $this->createQuery();
    }

    public function connect(array $params): bool
    {
        echo PHP_EOL . 'Connecting to database...' . PHP_EOL;
        return $this->connection->connect($params);
    }

    public function dump(array $params): bool
    {
        echo PHP_EOL . 'Creating dump of database...' . PHP_EOL;
        return $this->record->dump($params);
    }

    public function insert(array $params): bool
    {
        echo PHP_EOL . 'Inserting to database...' . PHP_EOL;
        return $this->query->insert($params);
    }

    public function select(array $params): bool
    {
        echo PHP_EOL . 'Selecting from database...' . PHP_EOL;
        return $this->query->select($params);
    }

    public function update(array $params): bool
    {
        echo PHP_EOL . 'Updating database records...' . PHP_EOL;
        return $this->query->update($params);
    }

    public function delete(array $params): bool
    {
        echo PHP_EOL . 'Deleting database records...' . PHP_EOL;
        return $this->query->delete($params);
    }

    abstract public function createConnection(): DBConnection;
    abstract public function createRecord(): DBRecord;
    abstract public function createQuery(): DBQueryBuilder;
}
