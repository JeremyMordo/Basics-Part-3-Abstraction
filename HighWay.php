<?php 

//HighWay

abstract class HighWay
{
    /**
     * @var Array
     */
    private $currentVehicles;
    /**
     * @var Int
     */
    private $nbLane;
    /**
     * @var Int
     */
    private $maxSpeed;

    public function __construct($nbLane, $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicle(Vehicle $Vehicle);
    
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }
    public function setCurrentVehicles(array $currentVehicles): void
    {
            $this->currentVehicles = $currentVehicles;
    }
    public function getNbLane(): Int
    {
        return $this->nbLane;
    }
    public function setNbLane(Int $nbLane): void
    {
            $this->nbLane = $nbLane;
    }
    public function getMaxSpeed(): Int
    {
        return $this->maxSpeed;
    }
    public function setMaxSpeed(Int $maxSpeed): void
    {
            $this->maxSpeed = $maxSpeed;
    }
}

//MotorWay

final class MotorWay extends HighWay
{
    public function __construct($nbLane, $maxSpeed)
    {
        parent:: __construct($nbLane, $maxSpeed);
    }

    public function addVehicle($Vehicle)
    {
        if($Vehicle instanceof Car)
        {
            $this->currentVehicles[] = $Vehicle;
            echo $sentence = "Yes, it can ! <br/>";
        }
        else
        {
            echo $sentence = "No, it can't ! <br/>";
        }
    }
}

//PedestrianWay

final class PedestrianWay extends HighWay
{
    public function __construct($nbLane, $maxSpeed)
    {
        parent:: __construct($nbLane, $maxSpeed);
    }

    public function addVehicle($Vehicle)
    {
        if($Vehicle instanceof Bike || $Vehicle instanceof Skateboard)
        {
            $this->currentVehicles[] = $Vehicle;
            echo $sentence = "Yes, it can ! <br/>";        }
        else
        {
            echo $sentence = "No, it can't ! <br/>";
        }
    }
}

//ResidentialWay

final class ResidentialWay extends HighWay
{
    public function __construct($nbLane, $maxSpeed)
    {
        parent:: __construct($nbLane, $maxSpeed);
    }

    public function addVehicle($Vehicle)
    {
        if($Vehicle instanceof Vehicle)
        {
            $this->currentVehicles[] = $Vehicle;
            echo $sentence = "Yes, it can ! <br/>";
        }
        else
        {
            echo $sentence = "No, it can't ! <br/>";
        }
    }
}
