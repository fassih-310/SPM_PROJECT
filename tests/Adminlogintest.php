<?php

use PHPUnit\Framework\TestCase;

class AdminLoginTest extends TestCase {
    protected $websiteFunctionality;

    protected function setUp(): void {
        $this->websiteFunctionality = new WebsiteFunctionality();
    }

    public function testAdminLoginWithValidCredentials() {
        $this->assertTrue($this->websiteFunctionality->adminLogin('validAdmin', 'validPassword'));
    }

    public function testAdminLoginWithInvalidCredentials() {
        $this->assertFalse($this->websiteFunctionality->adminLogin('invalidAdmin', 'invalidPassword'));
    }
}

?>
