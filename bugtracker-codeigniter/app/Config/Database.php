<?php namespace Config;

use CodeIgniter\Database\Config;

class Database extends Config
{
    public array $default = [
        'DSN'      => '',
        'hostname' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'database' => 'bugtracker_ci',
        'DBDriver' => 'MySQLi',
        'DBPrefix' => '',
        'charset'  => 'utf8mb4',
        'DBCollat' => 'utf8mb4_general_ci',
        'swapPre'  => '',
        'encrypt'  => false,
        'compress' => false,
        'port'     => 3306,
        'strictOn' => true,
        'failover' => [],
    ];

    // SQLite testing option (optional)
    public array $sqlite_testing = [
        'DBDriver' => 'SQLite3',
        'database' => WRITEPATH . '../database/test.db',
    ];
}
