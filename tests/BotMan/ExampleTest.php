<?php

namespace Tests\BotMan;

use Illuminate\Foundation\Inspiring;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->bot
            ->receives('Hi')
            ->assertReply('Hello!');
    }

    /**
     * A conversation test example.
     *
     * @return void
     */
    public function testConversationBasicTest()
    {
        $this->bot
            ->receives('Start Conversation')
            ->assertQuestion('Huh - you woke me up. What do you need?')
            ->receivesInteractiveMessage('quote')
            ->reply();
    }
}
