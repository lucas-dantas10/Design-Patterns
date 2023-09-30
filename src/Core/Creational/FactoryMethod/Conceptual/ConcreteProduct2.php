<?php 

namespace Core\Creational\FactoryMethod\Conceptual;

class ConcreteProduct2 implements ProductInterface
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct2}";
    }
}
