<?php
namespace JblacAuction\Model;

/**
 * Description of CountryEntity
 *
 * @author Innocent
 */
class CountryEntity {
    protected  $countryId = null;
    protected  $countryCode = null;
    protected  $country = null;
    protected  $lastUpdate = null;
    
    public function getCountryId() {
        return $this->countryId;
    }

    public function getCountryCode() {
        return $this->countryCode;
    }

    public function getCountry() {
        return $this->country;
    }

    public function getLastUpdate() {
        return $this->lastUpdate;
    }

    public function setCountryId($countryId) {
        $this->countryId = $countryId;
        return $this;
    }

    public function setCountryCode($countryCode) {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function setCountry($country) {
        $this->country = $country;
        return $this;
    }

    public function setLastUpdate($lastUpdate) {
        $this->lastUpdate = $lastUpdate;
        return $this;
    }

   
}