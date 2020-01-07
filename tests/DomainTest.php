<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use uiuifree\WhoDomain\WhoDomain;

class DomainTest extends TestCase
{
    public function testWho()
    {
        $this->assertEquals("au", WhoDomain::who("au.com"));
        $this->assertEquals("NTT docomo", WhoDomain::who("docomo.ne.jp"));
    }

}