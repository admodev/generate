<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase {

    public function testEmailVerificationValid(): void {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }

    public function testEmailVerificationInvalid(): void {
        $this->expectException(InvalidArgumentException::class);
        Email::fromString('invalid');
    }

    public function testEmailVerificationString(): void {
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }
}
?>
