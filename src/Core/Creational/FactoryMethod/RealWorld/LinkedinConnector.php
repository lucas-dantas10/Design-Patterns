<?php 

namespace Core\Creational\FactoryMethod\RealWorld;

class LinkedinConnector implements SocialNetworkConnectorInterface
{
    public function __construct(
        private string $email,
        private string $password,
    )
    {}

    public function logIn(): void
    {
        echo "Send HTTP API request to log in user $this->email with " .
            "password $this->password\n";
    }

    public function logOut(): void
    {
        echo "Send HTTP API request to log out user $this->email\n";
    }

    public function createPost($content): void
    {
        echo "Send HTTP API requests to create a post in LinkedIn timeline.\n";
    }
}