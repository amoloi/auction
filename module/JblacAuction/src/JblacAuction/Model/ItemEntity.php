<?php
namespace JblacAuction\Model;

/**
 * Description of ItemEntity
 *
 * @author Innocent
 */
class ItemEntity {
    protected  $itemId = null;
    protected  $itemCode = null;
    protected  $itemDescription = null;
    protected  $createdOn = null;
    protected  $createdBy = null;
    protected  $modifiedBy = null;
    protected  $modifiedOn = null;
    protected  $lastUpdate = null;
    
    public function getItemId() {
        return $this->itemId;
    }

    public function getItemCode() {
        return $this->itemCode;
    }

    public function getItemDescription() {
        return $this->itemDescription;
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

    public function setItemId($itemId) {
        $this->itemId = $itemId;
        return $this;
    }

    public function setItemCode($itemCode) {
        $this->itemCode = $itemCode;
        return $this;
    }

    public function setItemDescription($itemDescription) {
        $this->itemDescription = $itemDescription;
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