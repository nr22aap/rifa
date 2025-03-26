<?php
use PHPUnit\Framework\TestCase;

class AdminTest extends TestCase
{
    public function testAdminRole()
    {
        $admin = ["role" => "admin"];
        $this->assertEquals("admin", $admin["role"], "User role should be admin.");
    }
}
