<?php
declare(strict_types=1);

// QuanhauApiDocs SDK exists test

require_once __DIR__ . '/../quanhauapidocs_sdk.php';

use PHPUnit\Framework\TestCase;

class ExistsTest extends TestCase
{
    public function test_create_test_sdk(): void
    {
        $testsdk = QuanhauApiDocsSDK::test(null, null);
        $this->assertNotNull($testsdk);
    }
}
