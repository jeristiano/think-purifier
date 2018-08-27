<?php
/**
 * Created by PhpStorm.
 * User: JeremyK
 * Date: 2018/08/27
 * Time: 21:23
 */

if (!function_exists('runtime_path')) {


    /**
     * get path to runtime cache
     * @param string $path
     * @return string
     */
    function runtime_path($path='')
    {
        return  RUNTIME_PATH.($path ? DIRECTORY_SEPARATOR.$path : $path);

    }

}


if (!function_exists('clean')) {
    function clean($dirty, $config = null)
    {
        
        return (new Jeristiano\Pruifier())->clean($dirty, $config);
      //  return app('purifier')->clean($dirty, $config);
    }
}
