<?php
use PHPUnit\Framework\TestCase;

class PrescriptionTest extends TestCase
{
    public function testPrescriptionData()
    {
        $prescription = [
            "patient_id" => 1,
            "doctor_id" => 2,
            "medication" => "Paracetamol",
            "dosage" => "500mg",
        ];
        $this->assertEquals("Paracetamol", $prescription["medication"], "Medication should be Paracetamol.");
        $this->assertEquals("500mg", $prescription["dosage"], "Dosage should be 500mg.");
    }
}
