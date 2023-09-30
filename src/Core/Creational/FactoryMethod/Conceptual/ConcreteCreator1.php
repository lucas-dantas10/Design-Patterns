<?php 

namespace Core\Creational\FactoryMethod\Conceptual;

class ConcreteCreator1 extends Creator
{
    public function factoryMethod(): ProductInterface
    {
        return new ConcreteProduct1();
    }
}
