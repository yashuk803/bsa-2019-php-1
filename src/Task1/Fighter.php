<?php

declare(strict_types=1);

namespace App\Task1;

class Fighter
{
    private $id;
    private $name;
    private $health;
    private $attack;
    private $image;

    public function __construct(
        int $id,
        string $name,
        int$health,
        int $attack,
        string $image
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->health = $health;
        $this->attack = $attack;
        $this->image = $image;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHealth(): int
    {
        return $this->health;
    }

    public function getAttack(): int
    {
        return $this->attack;
    }

    public function getImage(): string
    {
        return $this->image;
    }
}
