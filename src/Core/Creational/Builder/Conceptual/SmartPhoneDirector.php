<?php 

namespace Core\Creational\Builder\Conceptual;

class SmartPhoneDirector
{
    public function __construct(
        protected SmartPhoneBuilderInterface $smartPhone
    )
    {}

    public function buildPhone(): void
    {
        $this->smartPhone->addGpu();
        $this->smartPhone->addCpu();
        $this->smartPhone->addRam();
        $this->smartPhone->addSensors();
        $this->smartPhone->addModel();
    }

    public function buildPhoneWithoutSensors(): void
    {
        $this->smartPhone->addGpu();
        $this->smartPhone->addCpu();
        $this->smartPhone->addRam();
        $this->smartPhone->addModel();
    }
}

