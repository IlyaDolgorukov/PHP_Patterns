<?php

abstract class DBQueryBuilder
{
    abstract public function insert(array $params): bool;
    abstract public function select(array $params): bool;
    abstract public function update(array $params): bool;
    abstract public function delete(array $params): bool;
}
