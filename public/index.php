<?php


require_once __DIR__ . '/../vendor/autoload.php';

use Core\Creational\Builder\Conceptual\ApplePhone;
use Core\Creational\Builder\Conceptual\Request\BuilderRequest;
use Core\Creational\Builder\Conceptual\Request\MethodsEnum;
use Core\Creational\Builder\Conceptual\SamsungPhone;
use Core\Creational\Builder\Conceptual\SmartPhoneBuilder;
use Core\Creational\Builder\Conceptual\SmartPhoneDirector;
use Core\Creational\FactoryMethod\Conceptual\ConcreteCreator1;
use Core\Creational\FactoryMethod\Conceptual\ConcreteCreator2;
use Core\Creational\FactoryMethod\Conceptual\Creator;

// **** Factory Method *****
function clientCode(Creator $creator)
{
    echo "Client: I'm not aware of the creator's class, but it still works.\n"
        . $creator->someOperation();
}

clientCode(new ConcreteCreator1());

clientCode(new ConcreteCreator2());



// **** EXAMPLE REQUEST *****

// $request = (new BuilderRequest)
//     ->url('http://localhost:8080/api/v1/users')
//     ->method(MethodsEnum::GET)
//     ->payload(['filters' => 'jfdkajkfa'])
//     ->getRequest();


// echo '<pre>';
// var_dump($request);


// **** EXAMPLE SMARTPHONE *****

// $galaxy20 = new SmartPhoneBuilder(
//     smartPhone: new SamsungPhone(),
//     data: [
//         'gpu' => 'XPTO',
//         'cpu' => 'XPTO',
//         'ram' => 12,
//         'model' => 'XPTO',
//         'sensors' => ['XPTO'],
//     ]
// );

// $smartPhoneCreator = new SmartPhoneDirector($galaxy20);
// $smartPhoneCreator->buildPhoneWithoutSensors();

// echo '<pre>';
// var_dump($galaxy20->getSmartPhone());
