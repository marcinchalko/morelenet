<?php 

declare(strict_types=1);

namespace App\Movies;

interface Strategy
{
    public function execute(array $data): array;
}