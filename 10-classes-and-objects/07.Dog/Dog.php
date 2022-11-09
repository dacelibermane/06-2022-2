<?php declare(strict_types=1);

class Dog
{
    private string $name;
    private string $gender;
    public const MALE = "Male";
    public const FEMALE = "Female";
    private ?Dog $mother;
    private ?Dog $father;

    public function __construct(string $name, string $gender, ?Dog $mother = null, ?Dog $father = null)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->father = $father;
        $this->mother = $mother;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getGender(): string
    {
        return $this->gender;
    }


    public function getMother(): ?Dog
    {
        return $this->mother;
    }

    public function getFather(): ?Dog
    {
        return $this->father;
    }

    public function sameMotherAs(Dog $dog): bool
    {

        if ($dog->getMother() == null || $this->getMother() === null) {
            return false;
        }

        return $dog->getMother()->getName() === $this->getMother()->getName();

    }

    public function setFather(Dog $dog ): bool
    {
        if ($dog->getFather() == null || $this->getFather() === null) {
            return false;
        }

        return $dog->getFather()->getName() === $this->getFather()->getName();

    }
}