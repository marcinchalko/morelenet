<?php 

declare(strict_types=1);

namespace App\Movies;

class Context
{

    public function __construct(private array $data, private Strategy $strategy) {}

    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function execute(): ?array
    {
        return $this->strategy->execute($this->data);
    }
}