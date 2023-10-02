<?php 

namespace Core\Creational\FactoryMethod\RealWorld;

class FacebookPoster extends SocialNetworkPoster
{
    public function __construct(
        private string $login,
        private string $password
    )
    {}

    public function getSocialNetwork(): SocialNetworkConnectorInterface
    {
        return new FacebookConnector($this->login, $this->password);
    }
}
