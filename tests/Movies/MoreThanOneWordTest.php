<?php 

declare(strict_types=1);

use App\Movies\Context;
use App\Movies\Data;
use App\Movies\Strategy\MoreThanOneWord;
use PHPUnit\Framework\TestCase;

final class MoreThanOneWordTest extends TestCase
{
    private $context;

    const MOVIES = Data::MOVIES;

    const EXPECTED_MOVIES = [
        "Pulp Fiction",
        // "Incepcja",
        "Skazani na Shawshank",
        "Dwunastu gniewnych ludzi",
        "Ojciec chrzestny",
        // "Django",
        // "Matrix",
        "Leon zawodowiec",
        // "Siedem",
        // "Nietykalni",
        "Władca Pierścieni: Powrót króla",
        "Fight Club",
        "Forrest Gump",
        "Chłopaki nie płaczą",
        // "Gladiator",
        "Człowiek z blizną",
        // "Pianista",
        "Doktor Strange",
        "Szeregowiec Ryan",
        "Lot nad kukułczym gniazdem",
        "Wielki Gatsby",
        "Avengers: Wojna bez granic",
        "Życie jest piękne",
        "Pożegnanie z Afryką",
        // "Szczęki",
        "Milczenie owiec",
        "Dzień świra",
        "Blade Runner",
        // "Labirynt",
        "Król Lew",
        "La La Land",
        // "Whiplash",
        "Wyspa tajemnic",
        // "Django",
        "American Beauty",
        "Szósty zmysł",
        "Gwiezdne wojny: Nowa nadzieja",
        "Mroczny Rycerz",
        "Władca Pierścieni: Drużyna Pierścienia",
        "Harry Potter i Kamień Filozoficzny",
        "Green Mile",
        // "Iniemamocni",
        // "Shrek",
        "Mad Max: Na drodze gniewu",
        "Terminator 2: Dzień sądu",
        "Piraci z Karaibów: Klątwa Czarnej Perły",
        "Truman Show",
        "Skazany na bluesa",
        // "Infiltracja",
        "Gran Torino",
        // "Spotlight",
        "Mroczna wieża",
        // "Rocky",
        "Casino Royale",
        // "Drive",
        "Piękny umysł",
        "Władca Pierścieni: Dwie wieże",
        "Zielona mila",
        "Requiem dla snu",
        "Forest Gump",
        "Requiem dla snu",
        "Milczenie owiec",
        // "Czarnobyl",
        "Breaking Bad",
        // "Nędznicy",
        // "Seksmisja",
        // "Pachnidło",
        "Nagi instynkt",
        // "Zjawa",
        "Igrzyska śmierci",
        // "Kiler",
        "Siedem dusz",
        "Dzień świra",
        // "Upadek",
        // "Lśnienie",
        "Pan życia i śmierci",
        // "Gladiator",
        // "Granica",
        "Hobbit: Niezwykła podróż",
        "Pachnidło: Historia mordercy",
        "Wielki Gatsby",
        // "Titanic",
        "Sin City",
        "Przeminęło z wiatrem",
        "Królowa śniegu",
    ];

    protected function setUp(): void
    {
        $context = new Context(self::MOVIES, new MoreThanOneWord());
        $this->context = $context->execute();
    }
    
    public function testCountItemsInArray(): void
    {
        $this->assertCount(count(self::EXPECTED_MOVIES), $this->context);
    }
    
    public function testEqualsItemsInArray(): void
    {
        $this->assertEqualsCanonicalizing(self::EXPECTED_MOVIES, $this->context);
    }
}