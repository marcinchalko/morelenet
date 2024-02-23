<?php 

declare(strict_types=1);

use App\Movies\Context;
use App\Movies\Data;
use App\Movies\Strategy\EvenTitleStartFromW;
use PHPUnit\Framework\TestCase;

final class EvenTitleStartFromWTest extends TestCase
{
    private $context;

    const MOVIES = Data::MOVIES;

    const EXPECTED_MOVIES = [
        "Wyspa tajemnic",
        "Władca Pierścieni: Drużyna Pierścienia",
        "Whiplash",
        "Władca Pierścieni: Dwie wieże"
    ];

    protected function setUp(): void
    {
        $context = new Context(self::MOVIES, new EvenTitleStartFromW());
        $this->context = $context->execute();
    }
    
    public function testEqualsItemsInArray(): void
    {
        $this->assertEqualsCanonicalizing(self::EXPECTED_MOVIES, $this->context);
    }
}