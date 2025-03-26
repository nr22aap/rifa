<?php
use PHPUnit\Framework\TestCase;

class PatientTest extends TestCase
{
    public function testNewPatientHasID()
    {
        $patient = ["id" => 1, "name" => "John Doe", "age" => 30];
        $this->assertArrayHasKey("id", $patient, "New patient should have an ID.");
    }

    public function testPatientName()
    {
        $patient = ["name" => "John Doe"];
        $this->assertEquals("John Doe", $patient["name"], "Patient name should match.");
    }
}
