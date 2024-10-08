<?php

namespace AloPeyk\AloPeyk\Exception;

class InvalidLatLongException extends AloPeykApiException
{
    public function __construct($coordinate = "Latitude or Longitude")
    {
        parent::__construct("$coordinate is not correct");
    }
}
