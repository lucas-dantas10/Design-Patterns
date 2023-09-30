<?php 

namespace Core\Creational\Builder\Conceptual\Request;

interface RequestInterface
{
    public function url(string $url): RequestInterface;
    public function payload(array $payload): RequestInterface;
    public function method(MethodsEnum $methodsEnum): RequestInterface;
    public function getRequest(): Request;
}