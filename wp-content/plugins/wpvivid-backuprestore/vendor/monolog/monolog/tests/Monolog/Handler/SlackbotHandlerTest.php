<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WPvividMonolog\Handler;

use WPvividMonolog\TestCase;
use WPvividMonolog\Logger;

/**
 * @author Haralan Dobrev <hkdobrev@gmail.com>
 * @see    https://slack.com/apps/A0F81R8ET-slackbot
 * @coversDefaultClass Monolog\Handler\SlackbotHandler
 */
class SlackbotHandlerTest extends TestCase
{
    /**
     * @covers ::__construct
     */
    public function testConstructorMinimal()
    {
        $handler = new SlackbotHandler('test-team', 'test-token', 'test-channel');
        $this->assertInstanceOf('WPvividMonolog\Handler\AbstractProcessingHandler', $handler);
    }

    /**
     * @covers ::__construct
     */
    public function testConstructorFull()
    {
        $handler = new SlackbotHandler(
            'test-team',
            'test-token',
            'test-channel',
            Logger::DEBUG,
            false
        );
        $this->assertInstanceOf('WPvividMonolog\Handler\AbstractProcessingHandler', $handler);
    }
}
