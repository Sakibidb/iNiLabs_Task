<?php
class Employee {
    private $name;
    private $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($newSalary) {
        if ($newSalary > 0) {
            $this->salary = $newSalary;
        } else {
            echo "Salary must be positive.\n";
        }
    }
}

// Example usage
$employee = new Employee("John", 50000);
echo "Initial Salary: " . $employee->getSalary() . "\n";

$employee->setSalary(60000);
echo "Updated Salary: " . $employee->getSalary() . "\n";
?>
