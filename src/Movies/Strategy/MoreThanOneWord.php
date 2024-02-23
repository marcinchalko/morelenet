<?php 

declare(strict_types=1);

namespace App\Movies\Strategy;

use App\Movies\Strategy;

class MoreThanOneWord implements Strategy
{
    public function execute(array $data): array
    {
        return array_values(preg_grep("/\\s/", $data));
    }
}