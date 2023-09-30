<?php 

namespace Core\Creational\FactoryMethod\Conceptual;

abstract class Creator 
{
    abstract public function factoryMethod(): ProductInterface;

    public function someOperation(): string
    {
        $product = $this->factoryMethod();

        $result = "Creator: The same creator's code has just worked with " .
            $product->operation() . PHP_EOL;

        return $result;
    }
}
