<?php

declare(strict_types=1);

namespace App\Task1;

class FightArena
{
    const MAX_VALUE = 0;

    private $fighter;

    public function add(Fighter $fighter): void
    {
       $this->fighter[] = $fighter;
    }

    public function mostPowerful(): Fighter
    {
      return $this->maxAttributeInArray($this->fighter, 'getAttack');

    }

    public function mostHealthy(): Fighter
    {
        return $this->maxAttributeInArray($this->fighter, 'getHealth');
    }

    public function all(): array
    {
        return  $this->fighter;
    }

    public function maxAttributeInArray(array $array, string $prop)
    {
        $max = self::MAX_VALUE;
        $obj = null;
        foreach($array as $point) {

            if($max <  $point->$prop()) {
                $max = $point->$prop();
                $obj = $point;
            }
        }

        return $obj;
    }
}