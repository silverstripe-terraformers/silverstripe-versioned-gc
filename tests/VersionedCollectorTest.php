<?php

namespace SilverStripe\VersionedGC\Tests;

use SilverStripe\Dev\SapphireTest;
use SilverStripe\VersionedGC\VersionedCollector;
use SilverStripe\GarbageCollector\GarbageCollectorService;

class VersionedCollectorTest extends SapphireTest
{
    /**
     * Ensure VersionedCollector is registered as a service by default
     */
    public function testRegisteredService()
    {
        $this->assertInstanceOf(VersionedCollector::class, GarbageCollectorService::inst()->getCollectors()[0]);
    }
}
