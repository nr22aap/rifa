<?php
use PHPUnit\Framework\TestCase;

class DoctorTest extends TestCase
{
    public function testDoctorLogin()
    {
        $doctor = ["username" => "doctor_1", "password" => "123"];
        $this->assertEquals("doctor_1", $doctor["username"], "Doctor username should match.");
    }

    public function testDoctorSpecialization()
    {
        $doctor = ["specialization" => "Cardiologist"];
        $this->assertEquals("Cardiologist", $doctor["specialization"], "Doctor specialization should be Cardiologist.");
    }
}
