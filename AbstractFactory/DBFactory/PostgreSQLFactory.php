<?php

class PostgreSQLFactory extends DBFactory
{
    public function createConnection(): DBConnection
    {
        return new PostgreConnection();
    }

    public function createRecord(): DBRecord
    {
        return new PostgreRecord();
    }

    public function createQuery(): DBQueryBuilder
    {
        return new PostgreQueryBuilder();
    }
}
