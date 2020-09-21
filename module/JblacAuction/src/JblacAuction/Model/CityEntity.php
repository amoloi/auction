<?php
namespace JblacAuction\Model;

/**
 * Description of CityEntity
 *
 * @author Innocent
 */
class CityEntity {
    protected $cityId = null;
    protected $city = null;
    protected $countryId = null;
    protected $lastUpdate = null;
    
    public function getCityId() {
        return $this->cityId;
    }

    public function getCity() {
        return $this->city;
    }

    public function getCountryId() {
        return $this->countryId;
    }

    public function getLastUpdate() {
        return $this->lastUpdate;
    }

    public function setCityId($cityId) {
        $this->cityId = $cityId;
        return $this;
    }

    public function setCity($city) {
        $this->city = $city;
        return $this;
    }

    public function setCountryId($countryId) {
        $this->countryId = $countryId;
        return $this;
    }

    public function setLastUpdate($lastUpdate) {
        $this->lastUpdate = $lastUpdate;
        return $this;
    }   
}