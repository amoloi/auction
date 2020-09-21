<?php
namespace JblacAuction\Model;

/**
 * Description of AuctionEntity
 *
 * @author Innocent
 */
class AuctionEntity {
    protected $auctionId = null;
    protected $auctionCode = null;
    protected $auctionTitle = null;
    protected $auctionDescription = null;
    protected $auctionDate = null;
    protected $lastUpdate = null;
    
    public function getAuctionId() {
        return $this->auctionId;
    }

    public function getAuctionCode() {
        return $this->auctionCode;
    }

    public function getAuctionTitle() {
        return $this->auctionTitle;
    }

    public function getAuctionDescription() {
        return $this->auctionDescription;
    }

    public function getAuctionDate() {
        return $this->auctionDate;
    }

    public function getLastUpdate() {
        return $this->lastUpdate;
    }

    public function setAuctionId($auctionId) {
        $this->auctionId = (int)$auctionId;
        return $this;
    }

    public function setAuctionCode($auctionCode) {
        $this->auctionCode = (string)$auctionCode;
        return $this;
    }

    public function setAuctionTitle($auctionTitle) {
        $this->auctionTitle = (string)$auctionTitle;
        return $this;
    }

    public function setAuctionDescription($auctionDescription) {
        $this->auctionDescription = (string)$auctionDescription;
        return $this;
    }

    public function setAuctionDate($auctionDate) {
        $this->auctionDate = $auctionDate;
        return $this;
    }

    public function setLastUpdate($lastUpdate) {
        $this->lastUpdate = $lastUpdate;
        return $this;
    }

    
}