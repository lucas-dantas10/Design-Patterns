<?php 

namespace Core\Creational\FactoryMethod\RealWorld;

abstract class SocialNetworkPoster 
{
    abstract public function getSocialNetwork(): SocialNetworkConnectorInterface;

    public function post($content)
    {
        $network = $this->getSocialNetwork();

        $network->logIn();
        $network->createPost($content);
        $network->logOut();
    }
}
