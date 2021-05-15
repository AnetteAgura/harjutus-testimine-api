<?php

declare(strict_types=1);

namespace Tests\integration;

use App\Service\CardDeckService;

class CardDeckServiceTest extends TestCase
{

    public function testGetDeck()
    {
        $cardDeck = CardDeckService::getDeck();

        $this->assertCount(52, $cardDeck);
        $this->assertEquals('4S', $cardDeck[2]);
        $this->assertEquals('2H', $cardDeck[13]);
    }

    public function testGetShuffledDeck()
    {
        $cardDeck = CardDeckService::getShuffledDeck(CardDeckService::getDeck());

        $this->assertCount(52, $cardDeck);
        $this->assertFalse('4S' === $cardDeck[2]);
        $this->assertFalse('2H' === $cardDeck[13]);
    }

    public function test_adding()
    {
        $this->assertEquals(2, 1 + 1);
    }

    public function testTrueAssetsToTrue()
    {
        $condition = true;
        $this->assertTrue($condition);
    }

}