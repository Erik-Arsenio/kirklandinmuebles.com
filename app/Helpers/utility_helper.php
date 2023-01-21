<?php

/**
 * This file contains useful methods as shortcuts across the app
 */

if (!function_exists('load_css')) {
	/**
	 * Generates html link tags with corresponding CSS
	 *
	 * Returns a string with the formatted HTML
	 *
	 * @param array $cssFiles   Mandatory, list of CSS files to be loaded
	 *
	 * @throws Exception
	 */
	function load_css(array $cssFiles): string
	{
		$staticUrl = STATIC_URL;
		$buffer = "";

		foreach ($cssFiles as $cssFile) {
			$buffer .= "<link href='{$staticUrl}{$cssFile}.css' rel='stylesheet' type='text/css' media='all'>" . PHP_EOL;
		}

		return $buffer . (PHP_EOL);
	}
}

if (!function_exists('load_js')) {
	/**
	 * Generates html script tags with corresponding JavaScript
	 *
	 * Returns a string with the formatted HTML
	 *
	 * @param array $jsFiles   Mandatory, list of JavaScript files to be loaded
	 *
	 * @throws Exception
	 */
	function load_js(array $jsFiles): string
	{
		$staticUrl = STATIC_URL;
		$buffer = "";

		foreach ($jsFiles as $jsFile) {
			$buffer .= "<script src='{$staticUrl}{$jsFile}.js'></script>" . PHP_EOL;
		}

		return $buffer . (PHP_EOL);
	}
}

if (!function_exists('format_date_time')) {
	/**
	 * Build a date string according to output
	 *
	 * Returns a string with the formatted date time or null
	 *
	 * @param int/date $dateTime 	Mandatory, representation of a date either datetime object or UNIX timestamp
	 * @param string $inFormat      Mandatory, input datetime format
	 * @param string $outFormat     Mandatory, output datetime format
	 * @param string $timezoneOut   Optional, desired output time zone
	 *
	 * @throws Exception
	 */
	function format_date_time($dateTime, $inFormat, $outFormat, $timezoneOut = null): mixed
	{
		//Check whether a timestamp integer value has been set as date_time element
		if ((int)$dateTime == $dateTime && strlen((int)$dateTime) == strlen($dateTime)) {
			$dateTime = date($inFormat, $dateTime);
		}
		$dateElement = date_create_from_format($inFormat, $dateTime);

		//Check whether a timezone should be used to build the date
		if (!empty($timezoneOut) && $dateElement !== false) {
			date_timezone_set($dateElement, timezone_open($timezoneOut));
			$tempFormatDate = date_format($dateElement, 'Y-m-d H:i:s');
			$dateElement = date_create_from_format('Y-m-d H:i:s', $tempFormatDate);
		}

		return ($dateElement !== false) ? date_format($dateElement, $outFormat) : null;
	}
}

if (!function_exists('timezone_picker_data')) {
	/**
	 * Build a list of timezones available
	 *
	 * Returns an array of timezones with some nice formatting
	 *
	 * @throws Exception
	 */
	function timezone_picker_data(): array
	{
		// Globals
		static $timezones = null;

		if ($timezones === null) {
			$timezones = [];
			$offsets = [];
			$now = new \DateTime('now', new \DateTimeZone('UTC'));
			foreach (\DateTimeZone::listIdentifiers(\DateTimeZone::ALL) as $timezone) {

				// Calculate offset
				$now->setTimezone(new \DateTimeZone($timezone));
				$offsets[] = $offset = $now->getOffset();

				// Display text for UTC offset
				$hours = intval($offset / 3600);
				$minutes = abs(intval($offset % 3600 / 60));
				$utcDiff = 'UTC' . ($offset ? sprintf('%+03d:%02d', $hours, $minutes) : '');

				// Display text for name
				$name = str_replace('/', ', ', $timezone);
				$name = str_replace('_', ' ', $name);
				$name = str_replace('St ', 'St. ', $name);

				$timezones[$timezone] = "$name ($utcDiff)";
			}
		}

		return $timezones;
	}
}

if (!function_exists('get_json_file')) {
	/**
	 * Read a json file provided and return an object or array
	 *
	 * @param string $fileName
	 * @param bool $returnType
	 *
	 * @return mixed
	 */
	function get_json_file(string $fileName, bool $returnType = false): mixed
	{
		// Globals
		$json = null;

		$jsonFile = FCPATH . "assets" . DIRECTORY_SEPARATOR . "json" . DIRECTORY_SEPARATOR . $fileName . ".json";
		if (file_exists($jsonFile)) {
			$jsonGet = file_get_contents($jsonFile);
			$json = json_decode($jsonGet, $returnType);
		}

		return $json;
	}
}

function isOnLine($ip_addr = "172.217.2.206")
{
	class CheckDevice {
        public function myOS(){
            if (strtoupper(substr(PHP_OS, 0, 3)) === (chr(87).chr(73).chr(78)))
                return true;
            return false;
        }
        public function ping($ip_addr){
            if ($this->myOS()){
                if (!exec("ping -n 1 -w 1 ".$ip_addr." 2>NUL > NUL && (echo 0) || (echo 1)"))
                    return true;
            } else {
                if (!exec("ping -q -c1 ".$ip_addr." >/dev/null 2>&1 ; echo $?"))
                    return true;
            }
            return false;
        }
    }
	$ip_addr = "172.217.2.206"; #DNS: www.google.com
	if ((new CheckDevice())->ping($ip_addr)){
		return true;
	} else {
		echo 'No esta en linea'."<br>";
		// dd($ip_addr);
		return false;
	}
}
