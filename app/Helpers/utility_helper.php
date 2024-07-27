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
		// $type = "";
		// var_dump($jsFiles);
		foreach ($jsFiles as $jsFile) {
			// if ($jsFile == 'js/main' or $jsFile == 'js/app-home') {
			// 	# code...
			// 	$type = " type='module'";
			// } 
				// $buffer .= "<script src='{$staticUrl}{$jsFile}.js' {$type}></script>" . PHP_EOL;
			$buffer .= "<script src='{$staticUrl}{$jsFile}.js'></script>" . PHP_EOL;
		}
		// dd($buffer);

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

if (!function_exists('uri_locale')) {
	/**
	 * Rebuild URL with corresponding locale
	 *
	 * @param string $locale
	 *
	 * @return string
	 */
	function uri_locale(string $locale): string
	{
		// Globals
		$segments = service('uri')->getSegments();
		$query = service('uri')->getQuery();

		if (!empty($segments) and isset($segments[0]) and $segments[0] == service('request')->getLocale()) {
			array_shift($segments);
		}

		return !empty($query) ? site_url(array_merge([$locale], $segments)) . '?' . $query : site_url(array_merge([$locale], $segments));
	}
}

if (!function_exists('json_search')) {
	/**
	 * Search in a json array based on defined search criteria
	 *
	 * @param mixed $jsonSearchValue
	 * @param string $jsonSearchField
	 * @param mixed $jsonFileObject
	 * @param string $jsonFileName
	 * @param string $jsonArrayName
	 * @param bool $returnKeys
	 *
	 * @return mixed
	 */
	function json_search(mixed $jsonSearchValue, string $jsonSearchField, mixed $jsonFileObject = null, string $jsonFileName = null, string $jsonArrayName = null, bool $returnKeys = false): mixed
	{
		# Globals
		$jsonResults = [];

		# Define how to proceed to build the array
		if (!empty($jsonFileObject)) {
			$jsonArray = !empty($jsonArrayName) ? $jsonFileObject->$jsonArrayName : $jsonFileObject;
		} else {
			$jsonArray = !empty($jsonArrayName) ? get_json_file($jsonFileName)->$jsonArrayName : get_json_file($jsonFileName);
		}
		
		foreach ($jsonArray as $key => $item) {
			# Define search element item according to type (Array or Object)
			$searchItem = is_array($jsonArray) ? $item[$jsonSearchField] : $item->$jsonSearchField;

			if ($searchItem == $jsonSearchValue) {
				array_push($jsonResults, $returnKeys == true ? $key : $item);
			}
		}

		return $jsonResults;
	}
}

if (!function_exists('remote_json_file')) {
	/**
	 * Read a json file provided and return an object or array
	 *
	 * @param string $fileName
	 * @param bool $returnType
	 *
	 * @return mixed
	 */
	function remote_json_file(string $fileName, bool $returnType = false): mixed
	{
		// Globals
		$json = null;

		$jsonFile = BASE_URL . "assets" . DIRECTORY_SEPARATOR . "json" . DIRECTORY_SEPARATOR . $fileName . ".json";
		$jsonGet = file_get_contents($jsonFile);
		if ($jsonGet !== false) {
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
