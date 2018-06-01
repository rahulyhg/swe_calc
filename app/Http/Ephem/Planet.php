<?php

namespace App\Http\Ephem;

abstract class Planet {
  
  protected $dateTime;
  protected $libPath;
  protected $geolocation;

  public function __construct($dateTime, $geolocoation)
  {

    //prepare to use swetest command
    //fast ugly solution due to absance of composer package with namespaces
    $this->libPath = './vendor/chapagain/php-swiss-ephemeris/sweph';
    putenv("PATH=$this->libPath");

    $this->dateTime = \DateTime::createFromFormat('U', $dateTime);
    $this->geolocoation = $geolocoation;

  }
  
  abstract protected function getEclipticCoords();
  
}