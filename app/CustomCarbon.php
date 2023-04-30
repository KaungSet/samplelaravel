<?php

namespace App;
use Carbon\Carbon;

class CustomCarbon extends Carbon
{
    public function middleOfDay()
    {
        // Set the time to 12:00:00
        $this->hour = 12;
        $this->minute = 0;
        $this->second = 0;
        
        return $this;
    }
}