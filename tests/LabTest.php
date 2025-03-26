<?php
use PHPUnit\Framework\TestCase;

class LabTest extends TestCase
{
    public function testLabTestCreation()
    {
        $labTest = [
            "patient_id" => 1,
            "test_type" => "Blood Test",
            "result" => "Normal"
        ];
        $this->assertEquals("Blood Test", $labTest["test_type"], "Lab test type should be Blood Test.");
        $this->assertEquals("Normal", $labTest["result"], "Lab result should be Normal.");
    }
}
