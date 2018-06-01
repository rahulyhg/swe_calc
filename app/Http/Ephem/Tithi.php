<?php

namespace App\Http\Ephem;
use App\Http\Ephem\Sun;
use App\Http\Ephem\Moon;

/*
https://en.wikipedia.org/wiki/Tithi
Titihi is an angle between Sun and Moon at some time period.
*/
class Tithi 
{
  
    protected $Sun;
    protected $Moon;
  
    public function __construct()
    {
      
        $now = new \DateTime();
        $this->Sun = new Sun($now->format('U'), '24,10.56,94');
        $this->Moon = new Moon($now->format('U'), '24,10.56,94');
    }
  
    public function getTithi()
    {
      
      $lngMoon = $this->Moon->getEclipticCoords();
      $lngSun = $this->Sun->getEclipticCoords();
      
      
       if ($lngMoon < $lngSun) {
         $lngMoon = $lngMoon + 360;
       }
      
      $tithi = round(($lngMoon - $lngSun) / 12);
      
      if($tithi <= 15) {
          $tithi = $titihi + 1;
      } else if($tithi > 15) {
          $tithi = $tithi - 15;
      }
      
      return $tithi;  
      
    }
  
}