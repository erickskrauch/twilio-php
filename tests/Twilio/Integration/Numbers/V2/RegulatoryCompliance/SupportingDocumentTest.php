<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Numbers\V2\RegulatoryCompliance;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class SupportingDocumentTest extends HolodeckTestCase {
    public function testCreateRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->numbers->v2->regulatoryCompliance
                                      ->supportingDocuments->create("friendly_name", "type");
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $values = ['FriendlyName' => "friendly_name", 'Type' => "type", ];

        $this->assertRequest(new Request(
            'post',
            'https://numbers.twilio.com/v2/RegulatoryCompliance/SupportingDocuments',
            null,
            $values
        ));
    }

    public function testCreateRequestWithFile(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->numbers->v2->regulatoryCompliance
                                      ->supportingDocuments->create(
                                          "friendly_name",
                                          "type",
                                          [
                                              "attributes" => ["key" => "value"],
                                              "file" => "file contents",
                                          ]
                                      );
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $values = [
            'FriendlyName' => "friendly_name",
            'Type' => "type",
            'Attributes' => '{"key":"value"}',
            'File' => "file contents",
        ];

        $this->assertRequest(new Request(
            'post',
            'https://numbers.twilio.com/v2/RegulatoryCompliance/SupportingDocuments',
            null,
            $values
        ));
    }

    public function testCreateResponse(): void {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "sid": "RDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "friendly_name": "friendly_name",
                "mime_type": "mime_type",
                "status": "draft",
                "type": "type",
                "attributes": {
                    "first_name": "foo",
                    "last_name": "bar"
                },
                "date_created": "2019-07-31T02:11:52Z",
                "date_updated": "2019-07-31T02:11:52Z",
                "url": "https://numbers.twilio.com/v2/RegulatoryCompliance/SupportingDocuments/RDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->numbers->v2->regulatoryCompliance
                                            ->supportingDocuments->create("friendly_name", "type");

        $this->assertNotNull($actual);
    }

    public function testReadRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->numbers->v2->regulatoryCompliance
                                      ->supportingDocuments->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://numbers.twilio.com/v2/RegulatoryCompliance/SupportingDocuments'
        ));
    }

    public function testReadEmptyResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "results": [],
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://numbers.twilio.com/v2/RegulatoryCompliance/SupportingDocuments?PageSize=50&Page=0",
                    "previous_page_url": null,
                    "url": "https://numbers.twilio.com/v2/RegulatoryCompliance/SupportingDocuments?PageSize=50&Page=0",
                    "next_page_url": null,
                    "key": "results"
                }
            }
            '
        ));

        $actual = $this->twilio->numbers->v2->regulatoryCompliance
                                            ->supportingDocuments->read();

        $this->assertNotNull($actual);
    }

    public function testReadFullResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "results": [
                    {
                        "sid": "RDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "friendly_name": "friendly_name",
                        "mime_type": "mime_type",
                        "status": "draft",
                        "type": "type",
                        "attributes": {
                            "first_name": "foo",
                            "last_name": "bar"
                        },
                        "date_created": "2019-07-31T02:11:52Z",
                        "date_updated": "2019-07-31T02:11:52Z",
                        "url": "https://numbers.twilio.com/v2/RegulatoryCompliance/SupportingDocuments/RDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
                    }
                ],
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://numbers.twilio.com/v2/RegulatoryCompliance/SupportingDocuments?PageSize=50&Page=0",
                    "previous_page_url": null,
                    "url": "https://numbers.twilio.com/v2/RegulatoryCompliance/SupportingDocuments?PageSize=50&Page=0",
                    "next_page_url": null,
                    "key": "results"
                }
            }
            '
        ));

        $actual = $this->twilio->numbers->v2->regulatoryCompliance
                                            ->supportingDocuments->read();

        $this->assertGreaterThan(0, \count($actual));
    }

    public function testFetchRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->numbers->v2->regulatoryCompliance
                                      ->supportingDocuments("RDXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://numbers.twilio.com/v2/RegulatoryCompliance/SupportingDocuments/RDXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testFetchResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "sid": "RDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "friendly_name": "friendly_name",
                "mime_type": "mime_type",
                "status": "draft",
                "type": "type",
                "attributes": {
                    "first_name": "foo",
                    "last_name": "bar"
                },
                "date_created": "2019-07-31T02:11:52Z",
                "date_updated": "2019-07-31T02:11:52Z",
                "url": "https://numbers.twilio.com/v2/RegulatoryCompliance/SupportingDocuments/RDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->numbers->v2->regulatoryCompliance
                                            ->supportingDocuments("RDXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();

        $this->assertNotNull($actual);
    }

    public function testUpdateRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->numbers->v2->regulatoryCompliance
                                      ->supportingDocuments("RDXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'post',
            'https://numbers.twilio.com/v2/RegulatoryCompliance/SupportingDocuments/RDXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testUpdateResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "sid": "RDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "friendly_name": "friendly_name",
                "mime_type": "mime_type",
                "status": "draft",
                "type": "type",
                "attributes": {
                    "first_name": "foo",
                    "last_name": "bar"
                },
                "date_created": "2019-07-31T02:11:52Z",
                "date_updated": "2019-07-31T02:11:52Z",
                "url": "https://numbers.twilio.com/v2/RegulatoryCompliance/SupportingDocuments/RDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->numbers->v2->regulatoryCompliance
                                            ->supportingDocuments("RDXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update();

        $this->assertNotNull($actual);
    }

    public function testDeleteRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->numbers->v2->regulatoryCompliance
                                      ->supportingDocuments("RDXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'delete',
            'https://numbers.twilio.com/v2/RegulatoryCompliance/SupportingDocuments/RDXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testDeleteResponse(): void {
        $this->holodeck->mock(new Response(
            204,
            null
        ));

        $actual = $this->twilio->numbers->v2->regulatoryCompliance
                                            ->supportingDocuments("RDXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();

        $this->assertTrue($actual);
    }
}
