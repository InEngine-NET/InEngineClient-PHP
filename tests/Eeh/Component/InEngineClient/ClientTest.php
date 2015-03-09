<?php

/**
 * @author  Ethan Hann <ethanhann@gmail.com>
 * @license For the full copyright and license information, please view the LICENSE
 *          file that was distributed with this source code.
 */

namespace Eeh\Component\InEngineClient;

use Doctrine\Common\Annotations\AnnotationRegistry;
use Eeh\Component\InEngineClient;
use PHPUnit_Framework_TestCase;
use \Mockery;
use \GuzzleHttp\Client as GuzzleHttpClient;


class ClientTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        AnnotationRegistry::registerAutoloadNamespace('JMS\Serializer\Annotation',  'vendor/jms/serializer/src');
    }

    public function tearDown()
    {
        Mockery::close();
    }

    public function testShouldGetCronTriggers()
    {
//        $mockResponse = Mockery::mock('\GuzzleHttp\Message\Response');
//        $mockResponse->shouldReceive('get')
//            ->times(1)
//            ->andReturn(new Response(200));
//
//        $mockGuzzleClient = m::mock('\GuzzleHttp\Client');
//        $mockGuzzleClient->shouldReceive('get')
//            ->times(1)
//            ->andReturn(new Response(200));
        $serializer = \JMS\Serializer\SerializerBuilder::create()->build();
        $subject = new Client(new GuzzleHttpClient(), $serializer);

        $result = $subject->getCronTriggers();

        $this->assertEquals(2, count($result));
    }

    public function testShouldGetSimpleTriggers()
    {
//        $mockResponse = Mockery::mock('\GuzzleHttp\Message\Response');
//        $mockResponse->shouldReceive('get')
//            ->times(1)
//            ->andReturn(new Response(200));
//
//        $mockGuzzleClient = m::mock('\GuzzleHttp\Client');
//        $mockGuzzleClient->shouldReceive('get')
//            ->times(1)
//            ->andReturn(new Response(200));
        $serializer = \JMS\Serializer\SerializerBuilder::create()->build();
        $subject = new Client(new GuzzleHttpClient(), $serializer);

        $result = $subject->getSimpleTriggers();

        $this->assertEquals(2, count($result));
    }
}
