<?php 

namespace Core\Creational\FactoryMethod\Conceptual;

class ConcreteProduct1 implements ProductInterface
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct1}";
    }
}
