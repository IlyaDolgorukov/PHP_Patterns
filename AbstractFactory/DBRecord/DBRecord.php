<?php

abstract class DBRecord
{
    abstract public function dump(array $params): bool;
}
