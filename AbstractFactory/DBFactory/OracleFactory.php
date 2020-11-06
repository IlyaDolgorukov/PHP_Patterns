<?php

class OracleFactory extends DBFactory
{
    public function createConnection(): DBConnection
    {
        return new OracleConnection();
    }

    public function createRecord(): DBRecord
    {
        return new OracleRecord();
    }

    public function createQuery(): DBQueryBuilder
    {
        return new OracleQueryBuilder();
    }
}
