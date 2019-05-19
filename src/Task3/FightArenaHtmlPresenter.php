<?php

declare(strict_types=1);

namespace App\Task3;

use App\Task1\FightArena;

class FightArenaHtmlPresenter
{
    public function present(FightArena $arena): string
    {
        $allFights = $arena->all();
        $stdOut = '';
        foreach ($allFights as $fight) {
            $stdOut.= "<p>". $fight->getName() . ': ' . $fight->getHealth() . ", ". $fight->getAttack() . "</p><br>";
            $stdOut.= "<img src=\"".$fight->getImage()."\">";

        }
        return $stdOut;
    }
}