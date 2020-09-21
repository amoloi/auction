<?php
namespace JblacAuction\Model;

/**
 * Description of LotEntity
 *
 * @author Innocent
 */
class LotEntity {
    protected  $lotId = null;
    protected  $lotItemId = null;
    protected  $lotBuyerId = null;
    protected  $lotAuctionId = null;
    protected  $lotItemId = null;
    protected  $lotCode = null;
    protected  $lotDescription = null;
    protected  $lotAmount = null;
    protected  $createdOn = null;
    protected  $createdBy = null;
    protected  $modifiedBy = null;
    protected  $modifiedOn = null;
    protected  $lastUpdate = null;
    
    public function getLotId() {
        return $this->lotId;
    }

    public function getLotItemId() {
        return $this->lotItemId;
    }

    public function getLotBuyerId() {
        return $this->lotBuyerId;
    }

    public function getLotAuctionId() {
        return $this->lotAuctionId;
    }

    public function getLotItemId() {
        return $this->lotItemId;
    }

    public function getLotCode() {
        return $this->lotCode;
    }

    public function getLotDescription() {
        return $this->lotDescription;
    }

    public function getLotAmount() {
        return $this->lotAmount;
    }

    public function getCreatedOn() {
        return $this->createdOn;
    }

    public function getCreatedBy() {
        return $this->createdBy;
    }

    public function getModifiedBy() {
        return $this->modifiedBy;
    }

    public function getModifiedOn() {
        return $this->modifiedOn;
    }

    public function getLastUpdate() {
        return $this->lastUpdate;
    }

    public function setLotId($lotId) {
        $this->lotId = $lotId;
        return $this;
    }

    public function setLotItemId($lotItemId) {
        $this->lotItemId = $lotItemId;
        return $this;
    }

    public function setLotBuyerId($lotBuyerId) {
        $this->lotBuyerId = $lotBuyerId;
        return $this;
    }

    public function setLotAuctionId($lotAuctionId) {
        $this->lotAuctionId = $lotAuctionId;
        return $this;
    }

    public function setLotItemId($lotItemId) {
        $this->lotItemId = $lotItemId;
        return $this;
    }

    public function setLotCode($lotCode) {
        $this->lotCode = $lotCode;
        return $this;
    }

    public function setLotDescription($lotDescription) {
        $this->lotDescription = $lotDescription;
        return $this;
    }

    public function setLotAmount($lotAmount) {
        $this->lotAmount = $lotAmount;
        return $this;
    }

    public function setCreatedOn($createdOn) {
        $this->createdOn = $createdOn;
        return $this;
    }

    public function setCreatedBy($createdBy) {
        $this->createdBy = $createdBy;
        return $this;
    }

    public function setModifiedBy($modifiedBy) {
        $this->modifiedBy = $modifiedBy;
        return $this;
    }

    public function setModifiedOn($modifiedOn) {
        $this->modifiedOn = $modifiedOn;
        return $this;
    }

    public function setLastUpdate($lastUpdate) {
        $this->lastUpdate = $lastUpdate;
        return $this;
    }

  
}
