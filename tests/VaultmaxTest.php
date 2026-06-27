<?php
/**
 * Tests for VaultMax
 */

use PHPUnit\Framework\TestCase;
use Vaultmax\Vaultmax;

class VaultmaxTest extends TestCase {
    private Vaultmax $instance;

    protected function setUp(): void {
        $this->instance = new Vaultmax(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Vaultmax::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
