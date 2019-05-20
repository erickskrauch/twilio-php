<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Proxy\V1\Service;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class PhoneNumberTest extends HolodeckTestCase {
    public function testCreateRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->proxy->v1->services("KSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                    ->phoneNumbers->create();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'post',
            'https://proxy.twilio.com/v1/Services/KSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/PhoneNumbers'
        ));
    }

    public function testCreateResponse() {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "sid": "PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "service_sid": "KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z",
                "phone_number": "+1987654321",
                "friendly_name": "Friendly Name",
                "iso_country": "US",
                "capabilities": {
                    "sms_outbound": true,
                    "voice_inbound": false
                },
                "url": "https://proxy.twilio.com/v1/Services/KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/PhoneNumbers/PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "is_reserved": false,
                "in_use": 0
            }
            '
        ));

        $actual = $this->twilio->proxy->v1->services("KSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                          ->phoneNumbers->create();

        $this->assertNotNull($actual);
    }

    public function testDeleteRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->proxy->v1->services("KSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                    ->phoneNumbers("PNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'delete',
            'https://proxy.twilio.com/v1/Services/KSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/PhoneNumbers/PNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testDeleteResponse() {
        $this->holodeck->mock(new Response(
            204,
            null
        ));

        $actual = $this->twilio->proxy->v1->services("KSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                          ->phoneNumbers("PNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();

        $this->assertTrue($actual);
    }

    public function testReadRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->proxy->v1->services("KSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                    ->phoneNumbers->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://proxy.twilio.com/v1/Services/KSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/PhoneNumbers'
        ));
    }

    public function testReadFullResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://proxy.twilio.com/v1/Services/KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/PhoneNumbers?PageSize=50&Page=0",
                    "previous_page_url": null,
                    "next_page_url": null,
                    "key": "phone_numbers",
                    "url": "https://proxy.twilio.com/v1/Services/KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/PhoneNumbers?PageSize=50&Page=0"
                },
                "phone_numbers": [
                    {
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "service_sid": "KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "sid": "PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "date_created": "2015-07-30T20:00:00Z",
                        "date_updated": "2015-07-30T20:00:00Z",
                        "phone_number": "+1987654321",
                        "friendly_name": "Friendly Name",
                        "iso_country": "US",
                        "capabilities": {
                            "sms_outbound": true,
                            "voice_inbound": false
                        },
                        "url": "https://proxy.twilio.com/v1/Services/KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/PhoneNumbers/PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "is_reserved": false,
                        "in_use": 0
                    }
                ]
            }
            '
        ));

        $actual = $this->twilio->proxy->v1->services("KSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                          ->phoneNumbers->read();

        $this->assertGreaterThan(0, count($actual));
    }

    public function testFetchRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->proxy->v1->services("KSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                    ->phoneNumbers("PNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://proxy.twilio.com/v1/Services/KSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/PhoneNumbers/PNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testFetchResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "sid": "PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "service_sid": "KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z",
                "phone_number": "12345",
                "friendly_name": "Friendly Name",
                "iso_country": "US",
                "capabilities": {
                    "sms_outbound": true,
                    "voice_inbound": false
                },
                "url": "https://proxy.twilio.com/v1/Services/KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/PhoneNumbers/PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "is_reserved": false,
                "in_use": 0
            }
            '
        ));

        $actual = $this->twilio->proxy->v1->services("KSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                          ->phoneNumbers("PNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();

        $this->assertNotNull($actual);
    }

    public function testUpdateRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->proxy->v1->services("KSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                    ->phoneNumbers("PNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'post',
            'https://proxy.twilio.com/v1/Services/KSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/PhoneNumbers/PNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testUpdateResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "sid": "PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "service_sid": "KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z",
                "phone_number": "12345",
                "friendly_name": "Friendly Name",
                "iso_country": "US",
                "capabilities": {
                    "sms_outbound": true,
                    "voice_inbound": false
                },
                "url": "https://proxy.twilio.com/v1/Services/KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/PhoneNumbers/PNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "is_reserved": true,
                "in_use": 0
            }
            '
        ));

        $actual = $this->twilio->proxy->v1->services("KSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                          ->phoneNumbers("PNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update();

        $this->assertNotNull($actual);
    }
}