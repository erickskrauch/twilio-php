<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Video\V1\Room\Participant;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class SubscribedTrackTest extends HolodeckTestCase {
    public function testFetchRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->video->v1->rooms("RMXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                    ->participants("PAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                    ->subscribedTracks("MTXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://video.twilio.com/v1/Rooms/RMXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Participants/PAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/SubscribedTracks/MTXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testFetchResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "room_sid": "RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z",
                "participant_sid": "PAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "publisher_sid": "PAbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "sid": "MTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "name": "bob-track",
                "kind": "data",
                "enabled": true,
                "url": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/PAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/SubscribedTracks/MTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->video->v1->rooms("RMXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                          ->participants("PAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                          ->subscribedTracks("MTXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();

        $this->assertNotNull($actual);
    }

    public function testReadRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->video->v1->rooms("RMXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                    ->participants("PAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                    ->subscribedTracks->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://video.twilio.com/v1/Rooms/RMXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Participants/PAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/SubscribedTracks'
        ));
    }

    public function testReadEmptyResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "subscribed_tracks": [],
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/PAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/SubscribedTracks?PageSize=50&Page=0",
                    "previous_page_url": null,
                    "url": "https://video.twilio.com/v1/Rooms/RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/PAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/SubscribedTracks?PageSize=50&Page=0",
                    "next_page_url": null,
                    "key": "subscribed_tracks"
                }
            }
            '
        ));

        $actual = $this->twilio->video->v1->rooms("RMXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                          ->participants("PAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                          ->subscribedTracks->read();

        $this->assertNotNull($actual);
    }
}