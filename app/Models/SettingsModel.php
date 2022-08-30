<?php

namespace App\Models;

use CodeIgniter\Model;

class SettingsModel extends Model
{
	protected $request;

	public function __construct()
	{
		$this->db = \Config\Database::connect();
		$this->request = \Config\Services::request();
	}

	/**
	 * List currencies available, apply sorting and limit accordingly and conditions if any
	 * @param bool $global
	 * @param array $currencies
	 * @param string $getSort
	 *
	 * @return object
	 **/
	public function getCurrencies($global = true, $currencies = [], $getSort = 'currency_iso ASC')
	{
		$builder = $this->db->table('v1_currency');

		if (is_array($currencies) && count($currencies) > 0) {
			$builder->whereIn('currency_id', $currencies);
		}
		else {
			$builder->where('currency_global', $global);
		}

		$builder->orderBy($getSort);

		return $builder->get()->getResult();
	}

	/**
	 * Get a currency record if any
	 * @param mixed $reference
	 *
	 * @return mixed
	 **/
	public function getCurrency($reference)
	{
		$builder = $this->db->table('v1_currency');
		$builder->where(is_numeric($reference) ? 'currency_id' : 'currency_iso', strtoupper($reference));
		return $builder->get()->getRow();
	}

	/**
	 * Add/Edit a currency record
	 * @param array $formPost
	 *
	 * @return bool
	 **/
	public function addEditCurrency($formPost)
	{
		// Globals
		$builderCurrency = $this->db->table('t_currency');
		$builderQuote = $this->db->table('t_quote');

		// Build currency array of values
		$valuesCurrency = [
			'currency_name_EN' => trim(strip_tags($formPost['currency_name_EN'])),
			'currency_name_ES' => trim(strip_tags($formPost['currency_name_ES'])),
			'currency_iso' => trim(strtoupper($formPost['currency_iso'])),
			'currency_fee' => trim($formPost['currency_fee']) ?: null
		];

		// Clean null values from previous array
		$valuesCurrency = array_filter($valuesCurrency, fn ($value) => !is_null($value) && $value !== '');

		// Start transactions
		$this->db->transStart();

		// Insert/Update record accordingly
		if (!empty($formPost['currency_id'])) {
			$builderCurrency->where('currency_id', $formPost['currency_id']);
			$builderCurrency->update($valuesCurrency);
		} else {
			$builderCurrency->insert($valuesCurrency);

			// Build quote array of values
			$valuesQuote = [
				'currency_from' => 1,
				'currency_to' => $this->db->insertID()
			];
			$builderQuote->insert($valuesQuote);
		}

		// End transactions
		$this->db->transComplete();

		return $this->db->transStatus();
	}

	/**
	 * List/Get countries available
	 * @param mixed $reference
	 * @param bool $searchByPhonePrefix
	 *
	 * @return mixed
	 **/
	public function getCountries($reference = null, $searchByPhonePrefix = false)
	{
		$countryNameField = "country_name_" . strtoupper(service('request')->getLocale());
		$builder = $this->db->table('t_country');
		$builder->orderBy($countryNameField);
		if (!empty($reference)) {
			if (is_numeric($reference)) {
				$builder->where($searchByPhonePrefix == true ? 'country_phone_prefix' : 'country_id', $reference);
			} else {
				$builder->where('country_iso_sm', $reference);
			}

			return $builder->get()->getRow();
		}
		return $builder->get()->getResult();
	}

	/**
	 * Get languages available
	 *
	 * @return object
	 **/
	public function getLanguages()
	{
		$builder = $this->db->table('t_language');
		return $builder->get()->getResult();
	}

	/**
	 * Get quotes
	 * @param string $currencyFrom
	 * @param string $currencyTo
	 *
	 * @return object
	 **/
	public function getQuotes($currencyFrom = null, $currencyTo = null)
	{
		$builder = $this->db->table('v1_quote');
		if (!empty($currencyFrom) && !empty($currencyTo)) {
			$builder->where(['currency_iso_from' => $currencyFrom, 'currency_iso_to' => $currencyTo]);
		}
		return $builder->get();
	}

	/**
	 * Update a quote record
	 * @param int $quoteId
	 * @param float $quoteAmount
	 *
	 * @return object
	 **/
	public function updateQuote($quoteId, $quoteAmount)
	{
		$builder = $this->db->table('t_quote');
		$builder->where('quote_id', $quoteId);
		return $builder->update(['quote_amount' => $quoteAmount]);
	}

	/**
	 * List/Get cities available and filter them if apply
	 * @param int $cityId
	 * @param int $stateId
	 *
	 * @return object
	 **/
	public function getCities($cityId = null, $stateId = null)
	{
		$builder = $this->db->table('v1_city');
		$builder->orderBy('city_name ASC');
		if (!empty($cityId)) {
			$builder->where('city_id', $cityId);
			return $builder->get()->getRow();
		} else {
			if (!empty($stateId)) {
				$builder->where('state_id', $stateId);
			}
			return $builder->get()->getResult();
		}
	}

	/**
	 * Add/Edit a city record
	 * @param array $formPost
	 *
	 * @return bool
	 **/
	public function addEditCity($formPost)
	{
		// Globals
		$builder = $this->db->table('t_city');

		// Build array of values
		$valuesCity = [
			'city_name' => trim(strip_tags($formPost['city_name'])),
			'state_id' => $formPost['state_id']
		];

		// Insert/Update record accordingly
		if (!empty($formPost['city_id'])) {
			$builder->where('city_id', $formPost['city_id']);
			return $builder->update($valuesCity);
		} else {
			return $builder->insert($valuesCity);
		}
	}

	/**
	 * List/Get municipalities available and filter them if apply
	 * @param int $municipalityId
	 * @param int $cityId
	 *
	 * @return object
	 **/
	public function getMunicipalities($municipalityId = null, $cityId = null)
	{
		$builder = $this->db->table('v1_municipality');
		$builder->orderBy('municipality_name ASC');
		if (!empty($municipalityId)) {
			$builder->where('municipality_id', $municipalityId);
			return $builder->get()->getRow();
		} else {
			if (!empty($cityId)) {
				$builder->where('city_id', $cityId);
			}
			return $builder->get()->getResult();
		}
	}

	/**
	 * Add/Edit a municipality record
	 * @param array $formPost
	 *
	 * @return bool
	 **/
	public function addEditMunicipality($formPost)
	{
		// Globals
		$builder = $this->db->table('t_municipality');

		// Build array of values
		$valuesMunicipality = [
			'municipality_name' => trim(strip_tags($formPost['municipality_name'])),
			'city_id' => $formPost['city_id']
		];

		// Insert/Update record accordingly
		if (!empty($formPost['municipality_id'])) {
			$builder->where('municipality_id', $formPost['municipality_id']);
			return $builder->update($valuesMunicipality);
		} else {
			return $builder->insert($valuesMunicipality);
		}
	}

	/**
	 * List/Get states available and filter them if apply
	 * @param int $stateId
	 *
	 * @return object
	 **/
	public function getStates($stateId = null)
	{
		$builder = $this->db->table('t_state');
		$builder->orderBy('state_name ASC');
		if (!empty($stateId)) {
			$builder->where('state_id', $stateId);
			return $builder->get()->getRow();
		} else {
			return $builder->get()->getResult();
		}
	}

	/**
	 * List statuses available
	 * @param array $values
	 *
	 * @return object
	 **/
	public function getStatuses($values = [])
	{
		$builder = $this->db->table('t_status');

		if (is_array($values) && count($values) > 0) {
			$builder->whereIn('status_id', $values);
		}

		return $builder->get()->getResult();
	}
}
