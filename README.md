PHPFacile! Event-json
==================

This service basically perform a mapping between an event retrieved from a database as an array to an event as an array that will be easily transformed (using json_encode()) in a target JSON string formatted as expected. It is a default implementation and is expected to be overwritten by the final user.

This is part of the phpfacile/event suite.

Installation
-----
At the root of your project type
```
composer require phpfacile/event-json
```
Or add "phpfacile/event-json": "^1.0" to the "require" part of your composer.json file
```composer
"require": {
    "phpfacile/event-json": "^1.0"
}
```
