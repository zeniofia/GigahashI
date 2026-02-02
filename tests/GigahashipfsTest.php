<?php
/**
 * Tests for GigahashIPFS
 */

use PHPUnit\Framework\TestCase;
use Gigahashipfs\Gigahashipfs;

class GigahashipfsTest extends TestCase {
    private Gigahashipfs $instance;

    protected function setUp(): void {
        $this->instance = new Gigahashipfs(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Gigahashipfs::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
