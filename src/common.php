<?php

if (!function_exists('clean')) {
	function clean($dirty, $config = null) {
		return (new Jeristiano\Purifier\Purifier(new \think\Config()))->clean($dirty, $config);
	}
}
