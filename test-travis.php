<?php
class TimezoneTest extends PHPUnit_Framework_TestCase
{
    public function testTimezone()
    {
        $timezone = date_default_timezone_get();
        $this->assertEquals('Asia/Taipei', $timezone);
    }
}
