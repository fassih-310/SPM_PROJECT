<?php

use PHPUnit\Framework\TestCase;

class DashboardTest extends TestCase {
    protected $websiteFunctionality;

    protected function setUp(): void {
        $this->websiteFunctionality = new WebsiteFunctionality();
    }

    public function testGetDashboardMetrics() {
        $dashboardMetrics = $this->websiteFunctionality->getDashboardMetrics();

        $this->assertArrayHasKey('invoices', $dashboardMetrics);
        $this->assertArrayHasKey('categories', $dashboardMetrics);
        $this->assertArrayHasKey('products', $dashboardMetrics);
        $this->assertArrayHasKey('services', $dashboardMetrics);
    }
}

?>
