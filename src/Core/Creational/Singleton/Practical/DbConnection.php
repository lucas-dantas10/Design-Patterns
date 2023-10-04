<?php 

namespace Core\Creational\Singleton\Practical;

use PDO;

class DbConnection extends Singleton
{

    private ?PDO $con = null;

    protected function __construct()
    {
        var_dump(\date('YmdHis'));
        $this->con = new PDO('mysql:host=localhost,dbname=design_patterns,user_db=root, password=root');
    }

    public static function getConnection(): PDO
    {
        $instance = static::getInstance();

        return $instance->con;
    }
}
