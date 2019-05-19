<?php

declare(strict_types=1);

namespace App\Task2;

class EmojiGenerator
{
    private $emoji = ['🚀', '🚃', '🚄', '🚅', '🚇'];

    public function generate(): \Generator
    {
        $countEmoji = count($this->emoji);

        for ($i = 0; $i < $countEmoji; $i++) {

            yield $this->emoji[$i];
        }
    }
}
