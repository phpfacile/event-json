<?php
namespace PHPFacile\Event\Json\Service;

class EventJsonService
{
    /**
     * Returns a database row representing an event transformed into an array
     * ready to get the expected final result as a JSON string after a json_encode() call
     *
     * @param array $row Row as returned by the database
     *
     * @return array
     */
    public function getDbRowAsRowReadyForJSON($row)
    {
        $row4JSON = [
            'id'             => $row['event_id'],
            'name'           => $row['name'],
            'start_datetime' => $row['datetime_start'],
            'location'       => $row['location_place'].', '.$row['location_country'],
            'longitude'      => $row['geocoded_longitude'],
            'latitude'       => $row['geocoded_latitude'],
        ];

        return $row4JSON;
    }
}
