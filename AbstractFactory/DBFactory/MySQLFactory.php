<?php

class MySQLFactory extends DBFactory
{
    public function createConnection(): DBConnection
    {
        return new MySQLConnection();
    }

    public function createRecord(): DBRecord
    {
        return new MySQLRecord();
    }

    public function createQuery(): DBQueryBuilder
    {
        return new MySQLDBQueryBuilder();
    }
}
