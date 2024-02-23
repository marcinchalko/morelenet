<?php 

declare(strict_types=1);

namespace App\Movies\Strategy;

use App\Movies\Strategy;

class EvenTitleStartFromW implements Strategy
{
    public function execute(array $data): array
    {
        return  array_filter($data, function($item) {
            return (strlen($item) % 2) == 0 && preg_match('/^W/', $item) == 1;
        });
    }
}