<?php
use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase {
    private $conn;

    protected function setUp(): void {
        $this->conn = new PDO("mysql:host=127.0.0.1;dbname=hms_test", "root", "");
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function testDatabaseConnection() {
        $this->assertNotNull($this->conn, "Database connection failed.");
    }
}
