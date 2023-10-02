<?php

namespace Core\Creational\FactoryMethod\RealWorld;

interface SocialNetworkConnectorInterface
{
    public function logIn(): void;
    public function logOut(): void;
    public function createPost($content);
}
