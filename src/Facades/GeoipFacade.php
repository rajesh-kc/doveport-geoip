<?php
namespace Rajeshkc\Geoip\Facades;
use Illuminate\Support\Facades\Facade;
  
class GeoipFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'geoip';
    }
}