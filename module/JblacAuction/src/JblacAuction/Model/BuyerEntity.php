<?php
namespace JblacAuction\Model;

/**
 * Description of BuyerEntity
 *
 * @author Innocent
 */
class BuyerEntity {
    protected $buyerId = null;
    protected $firstName = null;
    protected $lastName = null;
    protected $email = null;
    protected $addressId = null;
    protected $isActive = null;
    protected $auctionId = null;
    protected $createDate = null;
    protected $lastUpdate = null;
    
    public function __construct() {
        $this->createDate = date('Y-m-d H:i:s');
    }

        public function getBuyerId() {
        return $this->buyerId;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getAddressId() {
        return $this->addressId;
    }

    public function getIsActive() {
        return $this->isActive;
    }

    public function getAuctionId() {
        return $this->auctionId;
    }

    public function getCreateDate() {
        return $this->createDate;
    }

    public function getLastUpdate() {
        return $this->lastUpdate;
    }

    public function setBuyerId($buyerId) {
        $this->buyerId = $buyerId;
        return $this;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
        return $this;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setAddressId($addressId) {
        $this->addressId = $addressId;
        return $this;
    }

    public function setIsActive($isActive) {
        $this->isActive = $isActive;
        return $this;
    }

    public function setAuctionId($auctionId) {
        $this->auctionId = $auctionId;
        return $this;
    }

    public function setCreateDate($createDate) {
        $this->createDate = $createDate;
        return $this;
    }

    public function setLastUpdate($lastUpdate) {
        $this->lastUpdate = $lastUpdate;
        return $this;
    }
}