<?php 

declare(strict_types=1);

use App\Movies\Context;
use App\Movies\Data;
use App\Movies\Strategy\RandomThreeTitles;
use PHPUnit\Framework\TestCase;

final class RandomThreeTitlesTest extends TestCase
{
    private $context;

    const MOVIES = Data::MOVIES;

    protected function setUp(): void
    {
        $context = new Context(self::MOVIES, new RandomThreeTitles());
        $this->context = $context->execute();
    }
    
    public function testCountItemsInArray(): void
    {
        $this->assertCount(3, $this->context);
    }

    public function testFirstElementMustBeNotNull(): void
    {
        $this->assertNotNull($this->context[0]);
    }

    public function testSecondElementMustBeNotNull(): void
    {
        $this->assertNotNull($this->context[1]);
    }

    public function testThirdElementMustBeNotNull(): void
    {
        $this->assertNotNull($this->context[2]);
    }

}