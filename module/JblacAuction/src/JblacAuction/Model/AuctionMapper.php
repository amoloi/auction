<?php
namespace JblacAuction\Model;

use Zend\Db\Adapter\Adapter;
use JBlacAuction\Model\AuctionEntity;
use Zend\Stdlib\Hydrator\ClassMethods;
use Zend\Db\Sql\Sql;
use Zend\Db\Sql\Select;
use Zend\Db\ResultSet\HydratingResultSet;

/**
 * Description of AuctionMapper
 *
 * @author Innocent
 */

class AuctionMapper {
    protected $dbAdapter = null;
    protected $tableName = 'auction';
    protected $sql = null;

    public function __construct($dbAdapter) {
        $this->dbAdapter = $dbAdapter;
        $this->sql = new Sql($dbAdapter);
        $this->sql->setTable($this->tableName);
    }
    
    public function fetchAll(){
        $select = $this->sql->select();
        $select->order(['auctionDate DESC']);
        
        $stmt = $this->sql->prepareStatementForSqlObject($select);
        $results = $stmt->execute();
        
        $entityPrototype = new AuctionEntity();
        $hydrator = new ClassMethods();
        $resultset =  new HydratingResultSet($hydrator , $entityPrototype);
        $resultset->initialize($results);
        
        return $resultset;
    }    
    
}
