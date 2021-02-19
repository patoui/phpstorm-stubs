<?php

/**
 * @link https://github.com/SeasX/SeasClick
 */
class SeasClick
{
    /**
     * Constructor initializes the connection with clickhouse
     *
     * @param array $connectionParameters key/pair values for initializing a connection
     * - host: the destination host
     * - port: the TCP port to connect to
     * - compression: whether to compress transmitted data
     * - database: the target database
     * - user: the user name to connect with
     * - passwd: the password to connect with
     */
    public function __construct($connectionParameters)
    {
    }

    /**
     * @param $sql string SQL to execute
     * @param $parameters array key/pair values to replace within the SQL param
     * Example: $sql = 'SELECT {select} FROM {table}', $parameters = ['select' => 'string_c, array_c, arraynull_c', 'table' => 'test.array_test']
     * result = 'SELECT string_c, array_c, arraynull_c FROM test.array_test'
     * @return array
     */
    public function select($sql, $parameters = [])
    {
    }

    /**
     * @param string $table table to insert against
     * @param array  $columns columns to insert
     * @param array  $values values to insert into columns
     * @return bool whether insert was successful
     */
    public function insert($table, $columns, $values)
    {
    }

    /**
     * @param string $table table to insert against
     * @param array  $columns columns to insert
     * Example: writeStart("test.array_test", ['string_c', 'arraynull_c'])
     */
    public function writeStart($table, $columns)
    {
    }

    /**
     * @param array  $values multidimensional array values to insert into columns
     * Example: write([['string_c2', ["string"]]])
     */
    public function write($values)
    {
    }

    /**
     * Close writing connection
     * Example: writeEnd()
     */
    public function writeEnd()
    {
    }

    /**
     * @param $sql string SQL to execute
     * @param $parameters array key/pair values to replace within the SQL param
     * Example: $sql = 'DROP TABLE {table}', $parameters = ['table' => 'test.array_test']
     * result = 'DROP TABLE test.array_test'
     * @return bool whether the operation was successful
     */
    public function execute($sql, $parameters = [])
    {
    }

    /**
     * Destructor
     */
    public function __destruct()
    {
    }
}
