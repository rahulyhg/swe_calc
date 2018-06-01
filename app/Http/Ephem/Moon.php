<?php

namespace App\Http\Ephem;

use App\Http\Ephem\Planet;

class Moon extends Planet {
  
    public function getEclipticCoords()
    {
      
      $date = $this->dateTime->format('d.m.Y');
      $time = $this->dateTime->format('H:i:s');

      // More about command line options: https://www.astro.com/cgi/swetest.cgi?arg=-h&p=0
      // SIDEREAL ZODIAC using Lahiri Ayanamsa | Planetary position for single day
      
      //todo make via lumen console command fire method
      //p1 = Moon //todo apsctract command method
      exec ("swetest -edir$this->libPath -b$date -ut$time -p1 -n1 -sid1 -topo[$this->geolocoation.0] -eswe -fl -g, -head", $output_s);
      
      return (float)$output_s[0];
      
    }
  
}