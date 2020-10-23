<?php

// Vehicle.php

abstract class Vehicle
{
    protected $color;

    protected $nbSeats;

    protected $nbWheels;

    public function __construct($color, $nbSeats, $nbWheels)
    {
        $this->color=$color;
        $this->nbSeats=$nbSeats;
        $this->nbWheels=$nbWheels;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
}


// Bike.php

final class Bike extends Vehicle
{
    protected $color;

    protected $nbSeats;
    
    protected $nbWheels;

    public function __construct($color, $nbSeats, $nbWheels)
    {
        parent:: __construct($color, $nbSeats, $nbWheels);
    }
}

// Skateboard.php

final class Skateboard extends Vehicle
{
    protected $color;
    
    protected $nbSeats;
    
    protected $nbWheels;

    public function __construct($color, $nbSeats, $nbWheels)
    {
        parent:: __construct($color, $nbSeats, $nbWheels);
    }
}

// Cars.php

final class Car extends Vehicle
{
    protected $color;
    
    protected $nbWheels;

    protected $nbSeats;

    public function __construct($color, $nbSeats, $nbWheels)
    {
        parent:: __construct($color, $nbSeats, $nbWheels);
    }
}
