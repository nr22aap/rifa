<?php
use PHPUnit\Framework\TestCase;

class MedicalHistoryTest extends TestCase
{
    public function testMedicalHistoryEntry()
    {
        $history = [
            "patient_id" => 1,
            "diagnosis" => "Flu",
            "treatment" => "Rest and fluids"
        ];
        $this->assertEquals("Flu", $history["diagnosis"], "Diagnosis should be Flu.");
        $this->assertEquals("Rest and fluids", $history["treatment"], "Treatment should match.");
    }
}
