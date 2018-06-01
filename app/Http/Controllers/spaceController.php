<?php

namespace App\Http\Controllers;

use App\Http\Ephem\Sun;
use App\Http\Ephem\Moon;
use App\Http\Ephem\Tithi;

class spaceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
  
    
    public function getSunEclipticCoord()
    {
      
        //default apprrox coordinates for Riga 24,10.56,94
      
        $now = new \DateTime();
      
        $sun = new Sun($now->format('U'), '24,10.56,94');
              
        return response()
            ->json((float)$sun->getEclipticCoords());      
    }
  
    public function getMoonEclipticCoord()
    {

          //default apprrox coordinates for Riga 24,10.56,94

          $now = new \DateTime();

          $moon = new Moon($now->format('U'), '24,10.56,94');

          return response()
              ->json((float)$moon->getEclipticCoords());      
    }
  
    public function getTithi()
      {

            $tithi = new Tithi();

            return response()
                ->json($tithi->getTithi());      
      }
  
  

    //
}
