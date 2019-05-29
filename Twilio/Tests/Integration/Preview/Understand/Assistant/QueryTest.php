<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Preview\Understand\Assistant;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class QueryTest extends HolodeckTestCase {
    public function testFetchRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->preview->understand->assistants("UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                              ->queries("UHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://preview.twilio.com/understand/Assistants/UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Queries/UHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testFetchResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "language": "language",
                "date_created": "2015-07-30T20:00:00Z",
                "model_build_sid": "UGaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "query": "query",
                "date_updated": "2015-07-30T20:00:00Z",
                "status": "status",
                "sample_sid": "UFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "assistant_sid": "UAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "results": {
                    "task": {
                        "name": "name",
                        "task_sid": "UDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "confidence": 0.9
                    },
                    "entities": [
                        {
                            "name": "name",
                            "value": "value",
                            "type": "type"
                        }
                    ]
                },
                "url": "https://preview.twilio.com/understand/Assistants/UAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Queries/UHaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "sid": "UHaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "source_channel": "voice"
            }
            '
        ));

        $actual = $this->twilio->preview->understand->assistants("UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                                    ->queries("UHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();

        $this->assertNotNull($actual);
    }

    public function testReadRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->preview->understand->assistants("UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                              ->queries->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://preview.twilio.com/understand/Assistants/UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Queries'
        ));
    }

    public function testReadEmptyResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "queries": [],
                "meta": {
                    "previous_page_url": null,
                    "next_page_url": null,
                    "first_page_url": "https://preview.twilio.com/understand/Assistants/UAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Queries?Status=status&ModelBuild=UGaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&Language=language&PageSize=50&Page=0",
                    "page": 0,
                    "key": "queries",
                    "url": "https://preview.twilio.com/understand/Assistants/UAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Queries?Status=status&ModelBuild=UGaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&Language=language&PageSize=50&Page=0",
                    "page_size": 50
                }
            }
            '
        ));

        $actual = $this->twilio->preview->understand->assistants("UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                                    ->queries->read();

        $this->assertNotNull($actual);
    }

    public function testReadFullResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "queries": [
                    {
                        "language": "language",
                        "date_created": "2015-07-30T20:00:00Z",
                        "model_build_sid": "UGaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "query": "query",
                        "date_updated": "2015-07-30T20:00:00Z",
                        "status": "status",
                        "sample_sid": "UFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "assistant_sid": "UAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "results": {
                            "task": {
                                "name": "name",
                                "task_sid": "UDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                                "confidence": 0.9
                            },
                            "entities": [
                                {
                                    "name": "name",
                                    "value": "value",
                                    "type": "type"
                                }
                            ]
                        },
                        "url": "https://preview.twilio.com/understand/Assistants/UAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Queries/UHaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "sid": "UHaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "source_channel": null
                    }
                ],
                "meta": {
                    "previous_page_url": null,
                    "next_page_url": null,
                    "first_page_url": "https://preview.twilio.com/understand/Assistants/UAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Queries?Status=status&ModelBuild=UGaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&Language=language&PageSize=50&Page=0",
                    "page": 0,
                    "key": "queries",
                    "url": "https://preview.twilio.com/understand/Assistants/UAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Queries?Status=status&ModelBuild=UGaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&Language=language&PageSize=50&Page=0",
                    "page_size": 50
                }
            }
            '
        ));

        $actual = $this->twilio->preview->understand->assistants("UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                                    ->queries->read();

        $this->assertGreaterThan(0, count($actual));
    }

    public function testCreateRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->preview->understand->assistants("UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                              ->queries->create("language", "query");
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $values = array('Language' => "language", 'Query' => "query", );

        $this->assertRequest(new Request(
            'post',
            'https://preview.twilio.com/understand/Assistants/UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Queries',
            null,
            $values
        ));
    }

    public function testCreateResponse() {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "language": "language",
                "date_created": "2015-07-30T20:00:00Z",
                "model_build_sid": "UGaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "query": "query",
                "date_updated": "2015-07-30T20:00:00Z",
                "status": "status",
                "sample_sid": "UFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "assistant_sid": "UAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "results": {
                    "task": {
                        "name": "name",
                        "task_sid": "UDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "confidence": 0.9
                    },
                    "entities": [
                        {
                            "name": "name",
                            "value": "value",
                            "type": "type"
                        }
                    ]
                },
                "url": "https://preview.twilio.com/understand/Assistants/UAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Queries/UHaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "sid": "UHaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "source_channel": "voice"
            }
            '
        ));

        $actual = $this->twilio->preview->understand->assistants("UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                                    ->queries->create("language", "query");

        $this->assertNotNull($actual);
    }

    public function testUpdateRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->preview->understand->assistants("UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                              ->queries("UHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'post',
            'https://preview.twilio.com/understand/Assistants/UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Queries/UHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testUpdateResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "language": "language",
                "date_created": "2015-07-30T20:00:00Z",
                "model_build_sid": "UGaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "query": "query",
                "date_updated": "2015-07-30T20:00:00Z",
                "status": "status",
                "sample_sid": "UFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "assistant_sid": "UAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "results": {
                    "task": {
                        "name": "name",
                        "task_sid": "UDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "confidence": 0.9
                    },
                    "entities": [
                        {
                            "name": "name",
                            "value": "value",
                            "type": "type"
                        }
                    ]
                },
                "url": "https://preview.twilio.com/understand/Assistants/UAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Queries/UHaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "sid": "UHaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "source_channel": "sms"
            }
            '
        ));

        $actual = $this->twilio->preview->understand->assistants("UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                                    ->queries("UHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update();

        $this->assertNotNull($actual);
    }

    public function testDeleteRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->preview->understand->assistants("UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                              ->queries("UHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'delete',
            'https://preview.twilio.com/understand/Assistants/UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Queries/UHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testDeleteResponse() {
        $this->holodeck->mock(new Response(
            204,
            null
        ));

        $actual = $this->twilio->preview->understand->assistants("UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                                    ->queries("UHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();

        $this->assertTrue($actual);
    }
}