<?php 

namespace Core\Creational\Singleton\Conceptual;

use Exception;

class Singleton 
{
    protected static array $instances = [];

    protected function __construct() {}
    protected function __clone(): void {}

    public function __sleep(): array
    {
        throw new Exception("Cannot serialize a singleton");

        return [];
    }

    public function __wakeup()
    {
        throw new Exception("Cannot unserialize a singleton");
    }

    public static function getInstance()
    {
        $cls = static::class;

        if (!isset(static::$instances[$cls])) {
            static::$instances[$cls] = new static();
        }

        return static::$instances[$cls];
    }
}
