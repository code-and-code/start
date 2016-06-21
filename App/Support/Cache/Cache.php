<?php
namespace App\Support\Cache;

use Desarrolla2\Cache\Cache as DesarrollaCache;
use Desarrolla2\Cache\Adapter\File;

class Cache
{
    private static  $dir = '../../../storage/cache';
    private static $cache;

    private static function init()
    {
        $adapter     = new File(self::$dir);
        self::$cache = new DesarrollaCache($adapter);
    }

    public static function set($key,$value,$time = 0)
    {
        self::init();
        return self::$cache->set($key, $value, $time);
    }

    public static function get($key)
    {
        self::init();

        $cache = self::$cache->get($key);
        if(empty($cache))
        {
            return false;
        }
        return $cache;
    }

    public static function delete($key)
    {
        self::init();
        return self::$cache->delete($key);
    }

}

