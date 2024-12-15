<?php

namespace ProjectWithComposer;

use Tongedev\RfbDocument\CPFDocument;

class Person
{
    public function __construct(
        public string $name,
        public int $age,
        private string $cpf = "43192828099",
        public CPFDocument $cpfService = new CPFDocument()
    ) {
    }

    public function setCpf(string $document)
    {
        $this->cpf = $this->cpfService->sanitize($document); // remove special characters
    }

    public function getCPF()
    {
        return $this->cpf;
    }

    public function getCpfWithMask()
    {
        return $this->cpfService->format($this->cpf);
    }
}
