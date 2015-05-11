<?php

namespace Brouwers\LaravelDoctrine\Configuration\Connections;

class SqliteConnection extends AbstractConnection
{
    /**
     * @var string
     */
    protected $name = 'sqlite';

    /**
     * @param array $config
     *
     * @return array
     */
    public function configure($config = [])
    {
        return new static ([
            'driver'   => 'pdo_sqlite',
            'user'     => @$config['username'],
            'password' => @$config['password'],
            'memory'   => $config['database'] == ':memory' ? true : false,
            'path'     => $config['database'] == ':memory' ? null : $config['database']
        ]);
    }
}