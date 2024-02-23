<?php 

declare(strict_types=1);

namespace App\Movies\Strategy;

use App\Movies\Strategy;

class RandomThreeTitles implements Strategy
{
    public function execute(array $data): array
    {
        shuffle($data);
        
        return array_slice($data, 0, 3);
    }
}