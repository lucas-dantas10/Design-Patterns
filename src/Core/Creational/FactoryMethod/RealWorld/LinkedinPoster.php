<?php 

namespace Core\Creational\FactoryMethod\RealWorld;

class LinkedinPoster extends SocialNetworkPoster
{
    public function __construct(
        private string $email,
        private string $password
    )
    {}

    public function getSocialNetwork(): SocialNetworkConnectorInterface
    {
        return new LinkedinConnector($this->email, $this->password);
    }
}
