<?php
abstract class Animal {
    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

// Example usage
$animals = [new Dog(), new Cat()];

foreach ($animals as $animal) {
    echo $animal->makeSound() . "\n";
}

?>