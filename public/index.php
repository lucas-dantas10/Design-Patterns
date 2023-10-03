<?php


require_once __DIR__ . '/../vendor/autoload.php';

use Core\Creational\Builder\Conceptual\ApplePhone;
use Core\Creational\Builder\Conceptual\Request\BuilderRequest;
use Core\Creational\Builder\Conceptual\Request\MethodsEnum;
use Core\Creational\Builder\Conceptual\SamsungPhone;
use Core\Creational\Builder\Conceptual\SmartPhoneBuilder;
use Core\Creational\Builder\Conceptual\SmartPhoneDirector;
use Core\Creational\Builder\Practical\Enums\Role;
use Core\Creational\Builder\Practical\UserBuilder;
use Core\Creational\FactoryMethod\Conceptual\ConcreteCreator1;
use Core\Creational\FactoryMethod\Conceptual\ConcreteCreator2;
use Core\Creational\FactoryMethod\Conceptual\Creator;
use Core\Creational\FactoryMethod\RealWorld\FacebookPoster;
use Core\Creational\FactoryMethod\RealWorld\LinkedinPoster;
use Core\Creational\FactoryMethod\RealWorld\SocialNetworkPoster;
use Core\Creational\Singleton\Conceptual\Singleton;

/**
 * SINGLETON CONCEPTUAL
 */

$instanceA = Singleton::getInstance();
$instanceB = Singleton::getInstance();

var_dump($instanceA === $instanceB);


/**
 * BUILDER PRACTICAL
 */

// $user = (new UserBuilder)
//             ->addBasicInfo(
//                 name: 'teste',
//                 lastName: 'example',
//                 email: 'teste@example.com',
//                 age: 19,
//                 role: Role::D,
//                 active: true
//             )
//             ->addAddress(
//                 street: 'Rua testando',
//                 city: 'Rio de Janeiro',
//                 state: 'Rio de Janeiro',
//                 postalCode: 90867192,
//                 country: 'Brasil'
//             )
//             ->addPhone(
//                 21,
//                 665748899,
//             )
//             ->build();

// var_dump($user);


/**
 * FACTORY METHOD PRACTICAL
 */

// function clientCode(SocialNetworkPoster $creator)
// {
//     $creator->post('Test Create Post');
// }

// clientCode(new FacebookPoster('lucas', '******'));
// clientCode(new LinkedinPoster('otavio@example.com', '******'));



// **** Factory Method CREATIONAL *****
// function clientCode(Creator $creator)
// {
//     echo "Client: I'm not aware of the creator's class, but it still works.\n"
//         . $creator->someOperation();
// }

// clientCode(new ConcreteCreator1());

// clientCode(new ConcreteCreator2());



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
