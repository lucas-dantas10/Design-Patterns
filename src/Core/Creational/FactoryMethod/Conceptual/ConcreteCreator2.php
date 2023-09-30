<?php 

namespace Core\Creational\FactoryMethod\Conceptual;

class ConcreteCreator2 extends Creator
{
    public function factoryMethod(): ProductInterface
    {
        return new ConcreteProduct2();
    }
}