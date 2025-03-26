<?php
use PHPUnit\Framework\TestCase;

class AppointmentTest extends TestCase
{
    public function testAppointmentCreation()
    {
        $appointment = ["patient_id" => 1, "doctor_id" => 2, "date" => "2025-03-10"];
        $this->assertArrayHasKey("patient_id", $appointment, "Appointment should have a patient ID.");
        $this->assertArrayHasKey("doctor_id", $appointment, "Appointment should have a doctor ID.");
    }
}
